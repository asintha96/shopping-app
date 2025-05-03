<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::with('product')->get();
        return view('cart.index', compact('items'));
    }

    public function add(Product $product)
    {
        Cart::create([
            'product_id' => $product->id,
            'quantity' => 1
        ]);
        return redirect()->route('cart.index');
    }

    public function cancel(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index');
    }

    public function buy()
    {
        Cart::truncate();
        return redirect()->route('products.index')->with('success', 'Purchase successful!');
    }
}
