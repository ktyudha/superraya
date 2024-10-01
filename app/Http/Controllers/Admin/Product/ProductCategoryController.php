<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ProductCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:product categories read')->only('index');
        $this->middleware('permission:product categories create')->only('create', 'store');
        $this->middleware('permission:product categories update')->only('edit', 'update');
        $this->middleware('permission:product categories delete')->only('destroy');

        view()->share('menuActive', 'products');
        view()->share('subMenuActive', 'product-categories');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['models'] = ProductCategory::orderBy('id', 'desc')->paginate(10);
        return view('admin.products.categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.categories.create');
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
            'name'           => 'required|max:250',
            'description'     => 'nullable',
        ]);

        $category = new ProductCategory($request->all());
        $category->save();

        return redirect()
            ->route('admin.product.categories.index')
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
    public function edit(ProductCategory $category)
    {
        $data['model'] = $category;
        return view('admin.products.categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $category)
    {
        $request->validate([
            'name'           => 'required|max:250',
            'description'     => 'nullable',
        ]);


        $category->update($request->all());

        return redirect()->route('admin.product.categories.index')->with(['status' => 'success', 'message' => 'Update successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Service $service
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(ProductCategory $category)
    {


        if ($category->delete()) {
            return redirect()->route('admin.product.categories.index')->with(['status' => 'success', 'message' => 'Delete Successfully']);
        }

        return redirect()->route('admin.product.categories.index')->with(['status' => 'danger', 'message' => 'Delete Failed, Contact Developer']);
    }
}
