<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contents::where('category_id', '=', 8)->get();
        return view('backend.contactus.index', compact('data'));
    }

    public function create()
    {
        $category = Category::findorfail(8);
        return view('backend.contactus.create', compact('category'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['location'] = $request->location;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['link'] = $request->link;

        Contents::create($data);
        return redirect()->route('contactus.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $category = Category::findorfail(8);
        return view('backend.contactus.edit', compact('data', 'category'));
    }

    public function update(Request $request, $id)
    {

        $data = [];
        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['location'] = $request->location;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['link'] = $request->link;

        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('contactus.index')->with('message', 'Updated successfully');
    }

    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
