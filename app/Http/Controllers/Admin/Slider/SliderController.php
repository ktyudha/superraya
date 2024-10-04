<?php

namespace App\Http\Controllers\Admin\Slider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{

    /**
     * SliderController constructor.
     */
    public function __construct()
    {
        // $this->slider = new Slider(); # <-- iki gae opo, kan hanya digunakan di fungsi `store` tok?

        $this->middleware('permission:sliders read')->only('index');
        $this->middleware('permission:sliders create')->only('create', 'store');
        $this->middleware('permission:sliders update')->only('edit', 'update');
        $this->middleware('permission:sliders delete')->only('destroy');

        view()->share('menuActive', 'settings');
        view()->share('subMenuActive', 'sliders');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['models'] = Slider::orderBy('id', 'desc')->paginate(10);

        return view('admin.sliders.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'description' => 'required',
            'image' => 'image'
        ]);

        $slider = new Slider($request->all());

        if ($request->file('image')) {
            $path = $request->file('image')->store('slider');
            $slider->image = $path;
        }

        $slider->save();

        return redirect()->route('admin.sliders.index')->with(['status' => 'success', 'message' => 'Save Successfully']);
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
     * @param  Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $data['model'] = $slider;
        return view('admin.sliders.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'name' => 'required|max:200',
            'description' => 'required',
            'image' => 'image'
        ]);

        if ($request->hasFile('image')) {
            $newImage = $request->file('image')->store('slider');

            if ($newImage) {
                unlink('storage/' . $slider->image);
            }

            $slider->name = $request->name;
            $slider->description = $request->description;
            $slider->image = $newImage;

            $slider->save();
        } else {
            $slider->update($request->only('name', 'description', 'url', 'type'));
        }

        return redirect()->route('admin.sliders.index')->with(['status' => 'success', 'message' => 'Update Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Slider $slider
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Slider $slider)
    {
        if ($slider->image) {
            unlink('storage/' . $slider->image);
        }

        if ($slider->delete()) {
            return redirect()->route('admin.sliders.index')->with(['status' => 'success', 'message' => 'Delete Successfully']);
        }
        return redirect()->route('admin.sliders.index')->with(['status' => 'danger', 'message' => 'Delete Failed, Contact Developer']);
    }
}
