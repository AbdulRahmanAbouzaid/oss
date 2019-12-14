<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\User;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }



    public function addProducts(Request $request)
    {
        $request->validate([
            'products_ids' => 'required'
        ]);

        $order = auth()->user()->createOrFindOrder();
        $order->products()->syncWithoutDetaching($request->get('products_ids'), ['quantity' => 1]);

        return $order;
    }
}
