<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Category;
use App\Models\Sub_categories;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index()
    {
        $data = Contents::where('subcats_id', '=', 2)->get();
        return view('backend.team.index', compact('data'));
    }

    public function create()
    {

        // $category = Category::where('id', '=', 1)->get();
        // $datas = Sub_categories::where('id', '=', 2)->get();
        $category = Category::findorfail(1);
        $datas = Sub_categories::findorfail(2);
        return view('backend.team.create', compact('datas', 'category'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['designation'] = $request->designation;
        $data['name'] = $request->name;
        $data['short_description'] = $request->short_description;
        $data['experience'] = $request->experience;
        $data['specialization'] = $request->specialization;
        $data['short_text'] = $request->short_text;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['long_description'] = $request->long_description;
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['instagram'] = $request->instagram;
        //img
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/teamimg/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }
        // dd( $data);

        Contents::create($data);
        return redirect()->route('team.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $category = Category::findorfail(1);
        $datas = Sub_categories::findorfail(2);
        return view('backend.team.edit', compact('data', 'category', 'datas'));
    }

    public function update(Request $request, $id)
    {

        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['designation'] = $request->designation;
        $data['name'] = $request->name;
        $data['short_description'] = $request->short_description;
        $data['experience'] = $request->experience;
        $data['specialization'] = $request->specialization;
        $data['short_text'] = $request->short_text;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['long_description'] = $request->long_description;
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['instagram'] = $request->instagram;
        //img
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/teamimg/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('team.index')->with('message', 'Updated successfully');
    }


    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
