<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;

class ProfileController extends Controller
{
    public function index()
    {
        $data = Contents::findOrFail(1);
        return view('backend.profile.profile',compact('data'));
    }

    public function update(Request $request){
        $data = Contents::findOrFail(1);
        $data->category_id = $request->category_id;
        $data->subcats_id = $request->subcats_id;
        $data->title = $request->title;
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->youtube = $request->youtube;

        if ($request->file('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/images/'), $imageName);
            $data->image = $imageName;
        } else {
            unset($data->image);
        }

        if ($request->file('file_upload')) {
            $fileName = time() . '.' . $request->file_upload->extension();
            $request->file_upload->move(public_path('/backendsite/fileupload/'), $fileName);
            $data->file_upload = $fileName;
        } else {
            unset($data->file_upload);
        }

        // dd($data);


        $data->save();
        return redirect()->back();
    }
}
