<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Category;
use App\Models\Sub_categories;
use Illuminate\Support\Facades\DB;

class PublicationController extends Controller
{
    public function index()
    {
        $data = Contents::where('subcats_id', '=', 20)->get();
        return view('backend.publication.index', compact('data'));
    }

    public function create()
    {

        // $category = Category::where('id', '=', 1)->get();
        // $datas = Sub_categories::where('id', '=', 2)->get();
        $category = Category::findorfail(5);
        $datas = Sub_categories::findorfail(20);
        return view('backend.publication.create', compact('datas', 'category'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['title'] = $request->title;

        if ($request->file('file_upload')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->file_upload->extension();
            $request->file_upload->move(public_path('/backendsite/newimg/pdf/'), $imageName);
            $data['file_upload'] = $imageName;
        } else {
            unset($data['file_upload']);
        }

        // dd($data);


        Contents::create($data);
        return redirect()->route('publication.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $category = Category::findorfail(5);
        $datas = Sub_categories::findorfail(20);
        return view('backend.publication.edit', compact('data', 'category', 'datas'));
    }

    public function update(Request $request, $id)
    {

        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['title'] = $request->title;

        if ($request->file('file_upload')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->file_upload->extension();
            $request->file_upload->move(public_path('/backendsite/newimg/pdf/'), $imageName);
            $data['file_upload'] = $imageName;
        } else {
            unset($data['file_upload']);
        }


        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('publication.index')->with('message', 'Updated successfully');
    }


    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
