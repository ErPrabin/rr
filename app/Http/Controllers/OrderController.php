<?php

namespace App\Http\Controllers;

use App\Jobs\OrderConformedSMS;
use App\Jobs\OrderPlacedSMS;
use App\Jobs\SendSMS;
use Exception;
use App\Models\User;
use App\Models\Order;
use App\Models\ItemOrder;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Notifications\OrderConfirmed;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderPlacedNotification;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Srmklive\PayPal\Services\ExpressCheckout;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders= auth()->user()->orders;

        $orders = Auth::user()->orders()->with('items')->get();

        return view('frontend.pages.order-history')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /** Send SMS with Delay */
    public function sendSms()
    {
        SendSMS::dispatch(auth()->user()->phone_number)->delay(now()->addMinutes(60));
    }
    /** Send SMS when order to admin */
    public function orderSms($number)
    {
        OrderPlacedSMS::dispatch($number)->delay(now()->addSeconds());
    }

    /** Send SMS when order to user */
    public function conformSms($number)
    {
        OrderConformedSMS::dispatch($number)->delay(now()->addSeconds(15));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'                => 'required | string',
            'email'               => 'required | email',
            'phone'               => 'required | numeric',
            'address'             => 'required | string',
            'city'                => 'required | string',
            'different_address'   => 'nullable',
            'payment_gateway'     => 'required | string',
        ]);

        if (!$request->different_address) {
            $this->validate($request, [
                'shipping_name'     => ' required | string ',
                'shipping_email'    => ' required | email ',
                'shipping_phone'    => ' required | numeric ',
                'shipping_address'  => ' required | string ',
                'shipping_city'     => ' required | string ',
            ]);
        }

        return DB::transaction(function () use (&$request) {
            try {
                if ($request->payment_gateway == "card") {
                    $stripe = new \Stripe\StripeClient(
                        env('STRIPE_SECRET')
                    );


                    $token = $stripe->tokens->create([
                        'card' => [
                            'number' => $request->card_number,
                            'exp_month' => $request->expiry_month,
                            'exp_year' => $request->expiry_year,
                            'cvc' => $request->cvc,
                        ],
                    ]);

                    $charge = $stripe->charges->create([
                        'amount' =>  $this->getNumbers()->get('newTotal') * 100,
                        'currency' => 'aud',
                        'source' => $token,
                        'description' => 'Food ordered by ' . auth()->user()->name,
                    ]);

                }
                $order = $this->addToOrdersTable($request);


                if ($order) {
                    $this->addToItemOrderTable($order);
                }
                // Notification::send($user, new OrderPlacedNotification($order));
                // Notification::send(Auth::user(), new OrderConfirmed($order));
                if ($request->payment_gateway == "paypal") {
                    // dd($order->id);
                    $this->getExpressCheckout($order->id);
                }
                $user = User::where('role', 'admin')->first();


                $this->orderSms($user->phone_number);
                $this->conformSms(auth()->user()->phone_number);
                $this->sendSms();
            } catch (\Exception $e) {
                // DB::rollback();
                return redirect()->back()->with('error', 'Unable to Place the order');
            }

            Cart::instance('default')->destroy();
            session()->forget('coupon');

            return redirect()->route('order.show', $order->id)->with('Success', 'Your order has been confirmed! DONT forget to check your email.');
        });
    }


    /**
     * Store ORDER Details in database
     *
     * @param  \Illuminate\Http\Request  $request , $error
     * @return \Illuminate\Http\Response $order
     */

    protected function addToOrdersTable($request)  //helper function banako
    {
        $order = Order::create([
            'users_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'orderDate' => Carbon::today(),
            'discount' => $this->getNumbers()->get('discount'),
            'discount_code' => $this->getNumbers()->get('code'),
            'subtotal' => $this->getNumbers()->get('newSubtotal'),
            'total' => $this->getNumbers()->get('newTotal'),
            'payment_gateway' => $request->payment_gateway,
            'shipping_name' => $request->shipping_name,
            'shipping_email' => $request->shipping_email,
            'shipping_phone' => $request->shipping_phone,
            'shipping_address' => $request->shipping_address,
            'shipping_city' => $request->shipping_city,
        ]);

        return $order;
    }


    public function getExpressCheckout($orderId)
    {
        $checkoutData = $this->checkoutData();  //function call
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);
        $response = $provider->createOrder([
            'intent' => 'CAPTURE',
            'purchase_units' => [[
                'reference_id' => 'transaction_test_number' . $orderId,
                'data' => $checkoutData,
                'amount' => [
                    'currency_code' => 'USD',
                    'value' => $this->getNumbers()->get('newTotal')
                ]
            ]],
            'application_context' => [
                'cancel_url' => route('paypal.cancel'),
                'return_url' => route('paypal.success', $orderId)
            ]
        ]);
        return redirect($response['links'][1]['href'])->send();
    }

    private function checkoutData()
    {
        $cart = Cart::content();
        return array_map(function ($item) {
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['qty'],
            ];
        }, $cart->toarray());
    }

    /**
     * Store a newly created order in database
     *
     * @param  \Illuminate\Http\Request  $request , $error
     * @return \Illuminate\Http\Response $order
     */

    protected function addToItemOrderTable($order)
    {
        foreach (Cart::content() as $item) {
            ItemOrder::create([
                'order_id' => $order->id,
                'item_id' => $item->id,
                'quantity' => $item->qty,
            ]);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('frontend.pages.order-details', with([
            'order' => $order
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
