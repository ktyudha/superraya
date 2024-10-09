<?php

namespace App\Http\Controllers\Website\Service;

use App\Models\Service\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $data['services'] = Service::orderBy('id', 'desc')->get();
        return view('website.service.index', $data);
    }

    public function show($slug)
    {
        $data['model'] = Service::where('slug', $slug)->first();
        foreach ($data['model']['images'] as $key => $image) {
            $data['model']['images'][$key]['additional_value']  = json_decode($image->additional_value);
        }
        $data['services'] = Service::orderBy('id', 'desc')->get();
        // $data['services'] = Service::where('product_category_id', $data['model']->product_category_id)->get();
        return view('website.service.show', $data);
    }
}
