<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Gloudemans\Shoppingcart\Facades\Cart;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNumbers()
    {
        $tax= config('cart.tax')/100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $code=session()->get('coupon')['name']?? null;
        $Subtotal=(float) str_replace(',', '', Cart::subtotal());
        $newSubtotal=round($Subtotal - $discount);
        $newTax = $newSubtotal * $tax ;
        $newTotal= $newSubtotal + $newTax;   // OR  $newTotal = $newSubtotal*(1+$tax);
        
        return collect([
            'tax' => $tax,
            'discount' => $discount ,
            'code' => $code,
            'newSubtotal' => $newSubtotal,
            'newTax' => $newTax,
            'newTotal' => $newTotal,
        ]);
    }
}
