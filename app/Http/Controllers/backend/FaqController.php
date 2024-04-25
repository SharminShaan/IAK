<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Category;
use App\Models\Sub_categories;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        $data = Contents::where('subcats_id', '=', 29)->get();
        return view('backend.faq.index', compact('data'));
    }

    public function create()
    {

        // $category = Category::where('id', '=', 1)->get();
        // $datas = Sub_categories::where('id', '=', 2)->get();
        $category = Category::findorfail(1);
        $datas = Sub_categories::findorfail(29);
        return view('backend.faq.create', compact('datas', 'category'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['short_description'] = $request->short_description;
        $data['long_description'] = $request->long_description;

        // dd($data);


        Contents::create($data);
        return redirect()->route('faq.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $category = Category::findorfail(1);
        $datas = Sub_categories::findorfail(29);
        return view('backend.faq.edit', compact('data', 'category', 'datas'));
    }

    public function update(Request $request, $id)
    {

        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['short_description'] = $request->short_description;
        $data['long_description'] = $request->long_description;

        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('faq.index')->with('message', 'Updated successfully');
    }


    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
