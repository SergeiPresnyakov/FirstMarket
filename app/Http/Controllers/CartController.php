<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Show shopping cart with products
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Order confirmation form
     */
    public function order()
    {
        return view('order');
    }
}
