<?php

namespace App\Http\Controllers;

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
        
        $orders= Auth::user()->orders()->with('items')->get();

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
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

        DB::beginTransaction();
        try {
            $order= $this->addToOrdersTable($request);
        
            if ($order) {
                $this->addToItemOrderTable($order);
            }

            
            if ($request->payment_gateway == "card") {
                dd('stripe');
                $stripe = new \Stripe\StripeClient(
                    config('service.stripe')
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
                    'description' => 'Food ordered by ' . auth()->user()->name ,
                ]);
            }
            
            // $user=User::select('email')->where('role', 'admin')->get();
            // Notification::send($user, new OrderPlacedNotification($order));
            // Notification::send(Auth::user(), new OrderConfirmed($order));
            
            DB::commit();
        } catch (\Exception $e) {
            // DB::rollback();
            return redirect()->back()->with('error', 'Unable to Place the order');
        }
        
        Cart::instance('default')->destroy();
        session()->forget('coupon');

        return redirect()->route('order.show', $order->id)->with('Success', 'Your order has been confirmed! DONT forget to check your email.');
    }

    /**
     * Store ORDER Details in database
     *
     * @param  \Illuminate\Http\Request  $request , $error
     * @return \Illuminate\Http\Response $order
     */

    protected function addToOrdersTable($request)  //helper function banako
    {
        $order= Order::create([
            'users_id'=> Auth::id(),
            'name'=>$request->name,
            'email'=>$request->email,
            'phone' => $request->phone,
            'address'=> $request->address,
            'city'=>$request->city,
            'orderDate' =>Carbon::today(),
            'discount'=>$this->getNumbers()->get('discount'),
            'discount_code'=>$this->getNumbers()->get('code'),
            'subtotal'=>$this->getNumbers()->get('newSubtotal'),
            'total'=>$this->getNumbers()->get('newTotal'),
            'payment_gateway'=>$request->payment_gateway,
            'shipping_name'=>$request->shipping_name,
            'shipping_email'=>$request->shipping_email,
            'shipping_phone' => $request->shipping_phone,
            'shipping_address'=> $request->shipping_address,
            'shipping_city'=>$request->shipping_city,
        ]);
    
        return $order;
    }


    /**
     * Store a newly created order in database
     *
     * @param  \Illuminate\Http\Request  $request , $error
     * @return \Illuminate\Http\Response $order
    */

    protected function addToItemOrderTable($order)  //helper function banako
    {
        //insert into pivot table
        // foreach (Cart::content() as $item) {
        //     OrderProduct::create([
        //         'order_id'=> $order->id,
        //         'product_id'=>$item->id,
        //         'quantity'=> $item->qty,
        //         'original_price' => $item->options->original_price ? $item->options->original_price : 0,
        //         'discount'=> $item->options->discount,
        //         'discounted_price' => $item->options->discounted_price,
        //         'tax_amount' => $item->options->tax ,
        //     ]);
        // }
        foreach (Cart::content() as $item) {
            ItemOrder::create([
                'order_id'=> $order->id,
                'item_id'=>$item->id,
                'quantity'=> $item->qty,
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
