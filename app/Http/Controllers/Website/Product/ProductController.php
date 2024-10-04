<?php

namespace App\Http\Controllers\Website\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        $data['products_best'] = Product::orderBy('id', 'desc')->take(3)->get();
        $data['categories'] = ProductCategory::all();

        return view('website.product.index', $data);
    }

    public function show($slug)
    {
        $data['model'] = Product::where('slug', $slug)->first();
        $data['products'] = Product::where('product_category_id', $data['model']->product_category_id)->get();
        return view('website.product.show', $data);
    }
}
