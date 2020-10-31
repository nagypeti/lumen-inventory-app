<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController
{
    /**
     * List all products.
     *
     * @return View
     */
    public function index()
    {
        return view('products', ['products' => Product::all()]);
    }
}
