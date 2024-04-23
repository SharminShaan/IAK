<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderData = Slider::all();
        // $sliderData = Slider::where('type', "=", '1')->get();
        return view('backend.slider.index', compact('sliderData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataslider = new Slider();
        $dataslider->subheading = $request->subheading;
        $dataslider->heading = $request->heading;
        $dataslider->paragraph = $request->paragraph;
        $dataslider->button_text = $request->button_text;
        $dataslider->type = 1;

        $request->validate([
            'slideimage' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = time() . '.' . $request->slideimage->extension();
        $request->slideimage->move(public_path('/backendsite/images/slider/'), $imageName);
        $dataslider->slideimage = $imageName;


        $dataslider->save();
        return redirect()->route('slider.index');
        // return redirect()->back();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slideredit =  Slider::find($id);
        return view('backend.slider.edit', compact('slideredit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $dataslider =  Slider::find($request->id);
        $dataslider->subheading = $request->subheading;
        $dataslider->heading = $request->heading;
        $dataslider->paragraph = $request->paragraph;
        $dataslider->button_text = $request->button_text;

        if ($request->file('slideimage')) {
            $imageName = time() . '.' . $request->slideimage->extension();
            $request->slideimage->move(public_path('/backendsite/images/slider/'), $imageName);
            $dataslider->slideimage = $imageName;
        } else {
            unset($dataslider->slideimage);
        }
        
        // dd($dataslider);
        $dataslider->save();
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteslider = Slider::find($id);
        $deleteslider->delete();
        return redirect()->route('slider.index');
    }
}
