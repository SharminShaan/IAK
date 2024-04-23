<?php

namespace App\Http\Controllers\backend\homepage;

use App\Http\Controllers\Controller;
use App\Models\homepage\Whoweare;
use Illuminate\Http\Request;

class WhoweareController extends Controller
{
    public function index()
    {
        // $whoweare = Whoweare::all();
        $whoweare = Whoweare::findOrFail(1);
        return view('backend.homepages.whoweare',compact('whoweare'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request){
        $whoweare = Whoweare::findOrFail(1);
        // dd($whoweare);
        $whoweare->heading = $request->heading;
        $whoweare->subheading = $request->subheading;
        $whoweare->paragraph = $request->paragraph;
        $whoweare->list1 = $request->list1;
        $whoweare->list2 = $request->list2;
        $whoweare->list3 = $request->list3;
        $whoweare->list4 = $request->list4;
        $whoweare->bottomparagraph = $request->bottomparagraph;
        $whoweare->years = $request->years;
        $whoweare->yearsparagraph = $request->yearsparagraph;

        if ($request->file('image1')) {
            $imageName = time() . '.' . $request->image1->extension();
            $request->image1->move(public_path('/backendsite/images/homepage/'), $imageName);
            $whoweare->image1 = $imageName;
        } else {
            unset($whoweare->image1);
        }

        if ($request->file('image2')) {
            $rand = rand(10,100);
            $imageName = time() . $rand. '.' . $request->image2->extension();
            $request->image2->move(public_path('/backendsite/images/homepage/'), $imageName);
            $whoweare->image2 = $imageName;
        } else {
            unset($whoweare->image2);
        }


        $whoweare->save();
        return redirect()->back();
    }
}
