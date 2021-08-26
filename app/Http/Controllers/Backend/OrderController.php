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
        $data = Order::get();
        return view('backend.pages.order.index', compact('data'))->withPage('order');
    }
    public function show($id){
        $order=Order::findOrFail($id);
        return view('backend.pages.order.show', compact('order'))->withPage('order');

    }
}
