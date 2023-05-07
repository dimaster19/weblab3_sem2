<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Client\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return $orders;
    }

    public function create(Request $request)
    {
        $request->validate([
            'count' => 'required',
            'price' => 'required',
            'product_id' => 'required',

        ]);

        Order::create($request->all());

        return true;
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'count' => 'required',
            'price' => 'required',
            'product_id' => 'required',

        ]);

        $order->update($request->all());
        return true;

    }


    public function destroy(Order $order)
    {
       $order->delete();
       return true;

    }
}
