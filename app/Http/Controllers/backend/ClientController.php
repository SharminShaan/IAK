<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Category;
use App\Models\Sub_categories;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        // $data = Contents::get();
        $data = Contents::where('category_id', '=', 3)->get();
        return view('backend.client.index', compact('data'));
    }

    public function create()
    {
        $category = Category::where('id', '=', 3)->get();
        $datas = Sub_categories::where('cat_id', '=', 3)->get();
        return view('backend.client.create', compact('datas', 'category'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['name'] = $request->name;
        //img
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/clientimg/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }
        //logo
        if ($request->file('logo')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->logo->extension();
            $request->logo->move(public_path('/backendsite/clientimg/'), $imageName);
            $data['logo'] = $imageName;
        } else {
            unset($data['logo']);
        }


        Contents::create($data);
        return redirect()->route('client.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $category = Category::where('id', '=', 3)->get();
        $sub_cat = Sub_categories::where('cat_id', '=', 3)->get();
        return view('backend.client.edit', compact('data','category', 'sub_cat'));
    }

    public function update(Request $request, $id)
    {

        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['name'] = $request->name;
        unset($data['category_id']);
        // image
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            // $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/clientimg/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        // logo
        if ($request->file('logo')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->logo->extension();
            // $imageName = time() . '.' . $request->image->extension();
            $request->logo->move(public_path('/backendsite/clientimg/'), $imageName);
            $data['logo'] = $imageName;
        } else {
            unset($data['logo']);
        }


        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('client.index')->with('message', 'Updated successfully');

    }


    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
