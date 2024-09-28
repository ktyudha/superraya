<?php

namespace App\Http\Controllers\Admin\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
        // $this->middleware('permission:gallery images read');
        // $this->middleware('permission:gallery images create')->only('create', 'store');
        // $this->middleware('permission:gallery images update')->only('edit', 'update');
        // $this->middleware('permission:gallery images delete')->only('destroy');

        view()->share('menuActive', 'dashboard');
        view()->share('subMenuActive', 'ecomerce');
    }


    public function index()
    {
        return view('admin.dashboard.index');
    }
}
