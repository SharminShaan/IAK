<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class RegulatorController extends Controller
{
    public function index()
    {
        $data = Contents::where('category_id', '=', 7)->get();
        return view('backend.regulators.index', compact('data'));
    }

    public function create()
    {
        $category = Category::findorfail(7);
        return view('backend.regulators.create', compact('category'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['long_description'] = $request->long_description;
        $data['link'] = $request->link;

        //img
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/regulateimg/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        //logo
        if ($request->file('logo')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->logo->extension();
            $request->logo->move(public_path('/backendsite/regulateimg/'), $imageName);
            $data['logo'] = $imageName;
        } else {
            unset($data['logo']);
        }






        Contents::create($data);
        return redirect()->route('regulators.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $category = Category::findorfail(7);
        return view('backend.regulators.edit', compact('data', 'category'));
    }

    public function update(Request $request, $id)
    {

        $data = [];
        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['long_description'] = $request->long_description;
        $data['link'] = $request->link;

        //img
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/regulateimg/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        //logo
        if ($request->file('logo')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->logo->extension();
            $request->logo->move(public_path('/backendsite/regulateimg/'), $imageName);
            $data['logo'] = $imageName;
        } else {
            unset($data['logo']);
        }


        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('regulators.index')->with('message', 'Updated successfully');
    }


    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
