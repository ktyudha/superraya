<?php

namespace App\Http\Controllers\Website\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $filters = $request->only(['key', 'sort']);

        $data['products'] = Product::filters($filters)->paginate(6);
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

    public function category(Request $request, $slug)
    {
        $filters = $request->only(['key', 'sort']);

        $data['category'] = ProductCategory::where('slug', $slug)->first();
        $data['products'] = Product::where('product_category_id', $data['category']->id)->filters($filters)->paginate(6);;
        $data['products_best'] = Product::orderBy('id', 'desc')->take(3)->get();
        $data['categories'] = ProductCategory::all();

        return view('website.product.index', $data);
    }
}
