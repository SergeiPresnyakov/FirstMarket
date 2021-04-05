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

    /**
     * ProductController constructor
     *
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * All products catalog
     */
    public function index()
    {
        $products = $this->product->paginate(8);

        return view('index', compact('products'));
    }

    /**
     * Detail of the product
     *
     * @param int $id Product ID
     */
    public function show($id)
    {
        $product = $this->product->findOrFail($id);

        return view('details', compact('product'));
    }

    /**
     * Show products by category
     *
     * @param int $id Category ID
     */
    public function categoryProducts($id)
    {
        $products = $this->product->where('category_id', $id)->paginate(8);

        return view('index', compact('products'));
    }
}
