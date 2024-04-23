<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contents;
use App\Models\Category;
use App\Models\Sub_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        // $data = Contents::get();
        $data = Contents::where('category_id', '=', 2)->get();
        return view('backend.service.index', compact('data'));
    }

    public function create()
    {
        $category = Category::where('id', '=', 2)->get();
        $datas = Sub_categories::where('cat_id', '=', 2)->get();
        return view('backend.service.create', compact('datas', 'category'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['name'] = $request->name;
        $data['link'] = $request->link;
        //logo
        if ($request->file('logo')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->logo->extension();
            $request->logo->move(public_path('/backendsite/servicelogo/'), $imageName);
            $data['logo'] = $imageName;
        } else {
            unset($data['logo']);
        }


        Contents::create($data);
        return redirect()->route('servicecon.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $category = Category::where('id', '=', 2)->get();
        $sub_cat = Sub_categories::where('cat_id', '=', 2)->get();
        return view('backend.service.edit', compact('data','category', 'sub_cat'));
    }

    public function update(Request $request, $id)
    {

        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['name'] = $request->name;
        $data['link'] = $request->link;
        //logo
        if ($request->file('logo')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->logo->extension();
            $request->logo->move(public_path('/backendsite/servicelogo/'), $imageName);
            $data['logo'] = $imageName;
        } else {
            unset($data['logo']);
        }
        unset($data['category_id']);



        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('servicecon.index')->with('message', 'Updated successfully');

    }


    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
