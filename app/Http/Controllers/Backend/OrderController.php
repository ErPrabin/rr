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
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('backend.pages.order.show', compact('order'))->withPage('order');
    }
    public function changeStatus($id)
    {
        $order = Order::find($id);
        if ($order->status == 'pending') {
            $order->status='accepted';
            $order->save();
            // $order->update([
            //     'status' => 'accepted',
            // ]);
            // dd($order);
        } else {
            $order->status='pending';
            $order->save();
        }
        return redirect()->back();
    }
    public function destroy($id)
    {
        $data = Order::find($id);
        $data->delete();
        return redirect()->route('admin.order.index')->with('flash_success', 'Deleted Successfully');
    }
}
