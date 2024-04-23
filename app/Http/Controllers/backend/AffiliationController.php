<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Category;
use App\Models\Sub_categories;
use Illuminate\Support\Facades\DB;

class AffiliationController extends Controller
{
    public function index()
    {
        // $data = Contents::get();
        $data = Contents::where('subcats_id', '=', 7)->get();
        return view('backend.affiliation.index', compact('data'));
    }

    public function create()
    {
        $category = Category::where('id', '=', 1)->get();
        $datas = Sub_categories::where('id', '=', 7)->get();
        return view('backend.affiliation.create', compact('datas', 'category'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['title'] = $request->title;
        $data['long_description'] = $request->long_description;
        $data['link'] = $request->link;
        //img
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/images/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }


        Contents::create($data);
        return redirect()->route('affiliation.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $category = Category::where('id', '=', 1)->get();
        $sub_cat = Sub_categories::where('id', '=', 7)->get();
        return view('backend.affiliation.edit', compact('data','category', 'sub_cat'));
    }

    public function update(Request $request, $id)
    {

        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['title'] = $request->title;
        $data['long_description'] = $request->long_description;
        $data['link'] = $request->link;
        unset($data['category_id']);
        // image
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            // $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/images/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }


        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('affiliation.index')->with('message', 'Updated successfully');

    }


    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
