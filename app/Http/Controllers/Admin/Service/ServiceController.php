<?php

namespace App\Http\Controllers\Admin\Service;

use Illuminate\Http\Request;
use App\Models\Service\Service;
use App\Http\Controllers\Controller;
use App\Models\Service\ServiceImage;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:services read')->only('index');
        $this->middleware('permission:services create')->only('create', 'store');
        $this->middleware('permission:services update')->only('edit', 'update');
        $this->middleware('permission:services delete')->only('destroy');

        // view()->share('menuActive', 'services');
        view()->share('subMenuActive', 'services');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['models'] = Service::orderBy('id', 'desc')->Service()->paginate(10);
        return view('admin.services.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'description_short' => 'required',
            'type'            => 'required',
            'description'     => 'required',
            'image'           => 'required|image|max:2048',
            'data.images' => 'required',
        ]);

        $path = $request->file('image')->store('services');

        $service = new Service($request->all());
        $service->image = $path;

        if ($service->save()) {
            if ($request->data) {
                $key = 0;

                foreach ($request->data['type'] as $value) {
                    $dataImage = array();

                    for ($i = 0; $i < $value; $i++) {
                        $pathServiceImage = $request->data['images'][$key]->store('services');
                        array_push($dataImage, $pathServiceImage);
                        $key++;
                    }

                    $serviceImage = new ServiceImage();

                    $serviceImage->service_id = $service->id;
                    $serviceImage->type = $value;
                    $serviceImage->additional_value = json_encode($dataImage);
                    $serviceImage->save();
                }
            }
        }

        return redirect()
            ->route('admin.services.index')
            ->with(['status' => 'success', 'message' => 'Create service successfully.']);
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
    public function edit(Service $service)
    {
        $data['model'] = $service;
        $data['countLayout'] = $service->images->count();
        foreach ($service->images as $key => $image) {
            $data['model']['images'][$key]['additional_value']  = json_decode($image->additional_value);
        }
        return view('admin.services.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        // dd($request, $service);
        $request->validate([
            'title'           => 'required|max:250',
            'description_short' => 'required',
            'description'     => 'required',
            'image'           => 'image',
        ]);

        $recentImage  = ServiceImage::where('service_id', $service->id)->get();

        if ($request->hasFile('image')) {

            $payload = $request->all();

            $newImage = $request->file('image')->store('services');
            $payload['image'] = $newImage;

            if ($newImage) {
                if (Storage::exists($service->image)) {
                    Storage::delete($service->image);
                }
            }

            $service->update($payload);
        } else {
            $service->update($request->all());
        }


        if ($request->data) {
            $key = 0;

            foreach ($request->data['type'] as $value) {
                $dataImage = array();

                for ($i = 0; $i < $value; $i++) {
                    $pathServiceImage = $request->data['images'][$key]->store('services');
                    array_push($dataImage, $pathServiceImage);
                    $key++;
                }

                $serviceImage = new ServiceImage();

                $serviceImage->service_id = $service->id;
                $serviceImage->type = $value;
                $serviceImage->additional_value = json_encode($dataImage);
                $serviceImage->save();
            }
        }


        foreach ($recentImage as $key => $result) {

            $dataImage = json_decode($result->additional_value);

            foreach ($dataImage as $keyImage => $value) {

                if ($request->file('image-' . $result->id . '-' . $keyImage)) {
                    $newImage = $request->file('image-' . $result->id . '-' . $keyImage)->store('services');

                    if ($newImage) {
                        Storage::delete($value);
                        $dataImage[$keyImage] = $newImage;
                    }

                    $result->service_id = $service->id;
                    $result->type = $result->type;
                    $result->additional_value = json_encode($dataImage);
                    $result->save();
                    // dd($value, $dataImage, $newImage, $result);
                } elseif (!$request->input('isimage-' . $result->id . '-' . $keyImage)) {
                    Storage::delete($value);
                    $dataImage[$keyImage] = '';
                }
            }

            if (!$request->input('layout-' . $result->id)) {
                foreach ($dataImage as $keyImage => $value) {
                    Storage::delete($value);
                }
                $result->delete();
            }
        }

        return redirect()->route('admin.services.index')->with(['status' => 'success', 'message' => 'Update service successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Service $service
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Service $service)
    {
        if (Storage::exists($service->image)) {
            Storage::delete($service->image);
        }

        if ($service->images) {
            foreach ($service->images as $value) {
                $dataImage = json_decode($value->additional_value);
                foreach ($dataImage as $value) {
                    Storage::delete($value);
                }
            }
        }

        if ($service->delete()) {
            return redirect()->route('admin.services.index')->with(['status' => 'success', 'message' => 'Delete Successfully']);
        }

        return redirect()->route('admin.services.index')->with(['status' => 'danger', 'message' => 'Delete Failed, Contact Developer']);
    }
}
