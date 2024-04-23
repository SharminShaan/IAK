<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ThemeOptions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ThemeOptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = ThemeOptions::where('id', '=', 1)->first();
        return view('backend.themeoptions.index',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $setting = ThemeOptions::findOrFail(1);
        $setting->sitename = $request->sitename;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        $setting->paragraph = $request->paragraph;
        $setting->opening = $request->opening;
        $setting->facebook = $request->facebook;
        $setting->linkedin = $request->linkedin;
        $setting->twitter = $request->twitter;
        $setting->googleplus = $request->googleplus;
        $setting->youtube = $request->youtube;
        $setting->vmap = $request->vmap;


        if ($request->file('logo')) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('/backendsite/images/'), $imageName);
            $setting->logo = $imageName;
        } else {
            unset($setting->logo);
        }


        $setting->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
