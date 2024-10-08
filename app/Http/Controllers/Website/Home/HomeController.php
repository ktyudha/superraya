<?php

namespace App\Http\Controllers\Website\Home;

use App\Models\Slider;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Service\Service;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['slider']         = Slider::latest()->take(1)->first();
        $data['products']       = Product::latest()->take(6)->get();
        $data['services']       = Service::latest()->take(6)->get();
        $data['banner_sm']      = @Setting::key(Setting::BANNER_SERVICE_SM)->first()->value;
        $data['banner_lg']      = @Setting::key(Setting::BANNER_SERVICE_LG)->first()->value;
        // dd($data);
        return view('website.home.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
