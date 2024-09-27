<?php

namespace App\Http\Controllers\Website\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('website.service.index');
    }

    public function show(string $id)
    {
        return view('website.service.show');
    }
}
