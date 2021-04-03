<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Product model
     *
     * @var App\Models\Product
     */
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->paginate(8);

        return view('index', compact('products'));
    }

    public function show($id)
    {
        $product = $this->product->findOrFail($id);

        return view('details', compact('product'));
    }
}
