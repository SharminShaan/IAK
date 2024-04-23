<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Category;
use App\Models\Sub_categories;
use Illuminate\Support\Facades\DB;

class PagesetupController extends Controller
{
    public function index()
    {
        $data = Contents::where('type', '=', 1)->paginate(20);
        return view('backend.pagesetup.index', compact('data'));
    }

    public function create()
    {
        $category = Category::get();
        $datas = Sub_categories::get();
        return view('backend.pagesetup.create', compact('datas', 'category'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['title'] = $request->title;
        $data['short_description'] = $request->short_description;
        $data['type'] = 1;

        //img
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/pagesetupimg/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        if ($request->file('image2')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image2->extension();
            $request->image2->move(public_path('/backendsite/pagesetupimg/'), $imageName);
            $data['image2'] = $imageName;
        } else {
            unset($data['image2']);
        }

        if ($request->file('image3')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image3->extension();
            $request->image3->move(public_path('/backendsite/pagesetupimg/'), $imageName);
            $data['image3'] = $imageName;
        } else {
            unset($data['image3']);
        }

        Contents::create($data);
        return redirect()->route('pagesetup.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $category = Category::get();
        $datas = Sub_categories::get();
        return view('backend.pagesetup.edit', compact('data', 'category', 'datas'));
    }

    public function update(Request $request, $id)
    {

        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['title'] = $request->title;
        $data['short_description'] = $request->short_description;
        $data['type'] = 1;

        //img
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/pagesetupimg/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        if ($request->file('image2')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image2->extension();
            $request->image2->move(public_path('/backendsite/pagesetupimg/'), $imageName);
            $data['image2'] = $imageName;
        } else {
            unset($data['image2']);
        }

        if ($request->file('image3')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image3->extension();
            $request->image3->move(public_path('/backendsite/pagesetupimg/'), $imageName);
            $data['image3'] = $imageName;
        } else {
            unset($data['image3']);
        }


        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('pagesetup.index')->with('message', 'Updated successfully');
    }


    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
