<?php

namespace App\Http\Controllers\Admin\Service;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class BannerServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:services read')->only('index');
        $this->middleware('permission:services create')->only('create', 'store');
        $this->middleware('permission:services update')->only('edit', 'update');
        $this->middleware('permission:services delete')->only('destroy');

        // view()->share('menuActive', 'services');
        view()->share('subMenuActive', 'services-banner');
    }

    public function edit()
    {
        $data['banner_sm']       = @Setting::key(Setting::BANNER_SERVICE_SM)->first()->value;
        $data['banner_lg']       = @Setting::key(Setting::BANNER_SERVICE_LG)->first()->value;
        return view('admin.services.banner.edit', $data);
    }

    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
            'image_sm'           => 'image',
            'image_lg'           => 'image',
        ]);

        if ($request->hasFile('image_sm')) {
            $filex = Setting::where('key', 'banner_service_sm')->first();
            if (@$filex->value) {
                unlink(@$filex->value);
            }

            $path = $request->file('image_sm')->store('setting');
            Setting::updateOrCreate([
                'key' => Setting::BANNER_SERVICE_SM,
            ], ['value' => 'storage/' . $path]);
        }

        if ($request->hasFile('image_lg')) {
            $filex = Setting::where('key', 'banner_service_lg')->first();
            if (@$filex->value) {
                unlink(@$filex->value);
            }

            $path = $request->file('image_lg')->store('setting');
            Setting::updateOrCreate([
                'key' => Setting::BANNER_SERVICE_LG,
            ], ['value' => 'storage/' . $path]);
        }

        return redirect()->route('admin.services-banner.edit')->with(['status' => 'success', 'message' => 'Update service successfully.']);
    }
}
