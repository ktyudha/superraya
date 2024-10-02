<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:product posts read')->only('index');
        $this->middleware('permission:product posts create')->only('create', 'store');
        $this->middleware('permission:product posts update')->only('edit', 'update');
        $this->middleware('permission:product posts delete')->only('destroy');

        view()->share('menuActive', 'products');
        view()->share('subMenuActive', 'product-posts');
    }

    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'title'           => 'required|max:250',
            'product_category_id' => 'required|string|exists:product_categories,id',
            'description'     => 'required',
            'image'           => 'required|image|max:2048'
        ]);

        $path = $request->file('image')->store('products');
        $product = new Product($request->all());

        $product->user_id = auth()->guard('web')->user()->id;
        $product->image = $path;
        $product->save();

        return redirect()
            ->route('admin.product.posts.index')
            ->with(['status' => 'success', 'message' => 'Create successfully.']);
    }
}
