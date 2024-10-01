<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Http\Controllers\Controller;
use App\Models\Product\ProductCategory;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['models'] = Product::orderBy('id', 'desc')->paginate(10);
        return view('admin.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = ProductCategory::orderBy('id', 'desc')->get();
        return view('admin.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title'           => 'required|max:250',
            'product_category_id' => 'required|string|exists:product_categories,id',
            'description'     => 'required',
            'image'           => 'required|image|max:2048'
        ]);

        $path = $request->file('image')->store('products');
        $product = new Product($request->all());

        $product->user_id = auth()->user()->id;
        $product->image = $path;
        $product->save();

        return redirect()
            ->route('admin.product.posts.index')
            ->with(['status' => 'success', 'message' => 'Create successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $post)
    {
        $data['model'] = $post;
        $data['categories'] = ProductCategory::orderBy('id', 'desc')->get();
        return view('admin.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $post)
    {
        $request->validate([
            'title'           => 'required|max:250',
            'product_category_id' => 'required|string|exists:product_categories,id',
            'description'     => 'required',
            'image'           => 'image|max:2048'
        ]);

        if ($request->hasFile('image')) {

            $payload = $request->all();

            $newImage = $request->file('image')->store('products');
            $payload['image'] = $newImage;

            if ($newImage) {
                if (Storage::exists($post->image)) {
                    Storage::delete($post->image);
                }
            }

            $post->update($payload);
        } else {
            $post->update($request->all());
        }

        return redirect()->route('admin.product.posts.index')->with(['status' => 'success', 'message' => 'Update successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Service $service
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Product $post)
    {
        if (Storage::exists($post->image)) {
            Storage::delete($post->image);
        }

        if ($post->delete()) {
            return redirect()->route('admin.product.posts.index')->with(['status' => 'success', 'message' => 'Delete Successfully']);
        }

        return redirect()->route('admin.product.posts.index')->with(['status' => 'danger', 'message' => 'Delete Failed, Contact Developer']);
    }
}
