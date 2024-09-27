<?php

namespace App\Http\Controllers\Website\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('website.product.index');
    }

    public function show(string $id)
    {
        return view('website.product.show');
    }
}
