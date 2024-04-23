<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sub_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
    public function index()
    {
        $data = Sub_categories::all();
        return view('backend.subcategory.index', compact('data'));
    }

    public function create()
    {
        $datas = Category::get();
        return view('backend.subcategory.create', compact('datas'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['cat_id'] = $request->cat_id;
        $data['sub_cat_name'] = $request->sub_cat_name;
        $data['description'] = $request->description;

        // image
        // $rand = rand(10, 100);
        // $imageName = time() . $rand . '.' . $request->image->extension();
        // $request->image->move(public_path('/backendsite/images/'), $imageName);
        // $data['image'] = $imageName;

        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/images/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        Sub_categories::create($data);
        return redirect()->route('subcategory.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Sub_categories::findorfail($id);
        $catdatas = Category::get();
        return view('backend.subcategory.edit', compact('data', 'catdatas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\iso27002\iso27002Assessments  $iso27002Assessments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input['cat_id'] = $request->input('cat_id');
        $input['sub_cat_name'] = $request->input('sub_cat_name');
        $input['description'] = $request->description;

        // image
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            // $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/images/'), $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        DB::table('sub_categories')->where('id', $request->id)->update($input);

        return redirect()->route('subcategory.index')->with('message', 'Updated successfully');

    }


    public function destroy($id)
    {
        $data = Sub_categories::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
