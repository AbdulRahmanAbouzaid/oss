<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    


    public function destroy()
    {
        $order = auth()->user()->getActiveOrder();

        if($order){
            $order->products()->detach();
            $order->delete();
        }

        return redirect('/');
    }
}
