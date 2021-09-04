<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalPaymentController extends Controller
{
    public function cancelPage()
    {
        return false;
    }

    public function paymentSuccess(Request $request, $orderId)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        Cart::instance('default')->destroy();
        session()->forget('coupon');

        return redirect()->route('order.show', $orderId)->with('Success', 'Your order has been confirmed! DONT forget to check your email.');
    }
}
