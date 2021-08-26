<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ItemOrder;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::get();
        $itemorders = ItemOrder::get();
        return view('backend.pages.order.index', compact('orders', 'itemorders'));
    }
}
