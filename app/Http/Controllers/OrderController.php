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



    public function generateBill(Order $order)
    {
        $bill = $order->getBill();
        $card_number = auth()->user()->paymentMethods()->first()->card_number;
        return view('orders.bill', compact(['order', 'bill', 'card_number']));
    }
}
