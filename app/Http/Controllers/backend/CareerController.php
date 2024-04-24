<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Category;
use App\Models\Sub_categories;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    public function professionalindex()
    {
        $data = Contents::where('subcats_id', '=', 23)->get();
        return view('backend.career.index', compact('data'));
    }

    public function articleshipindex()
    {
        $data = Contents::where('subcats_id', '=', 24)->get();
        return view('backend.career.index', compact('data'));
    }

    public function create()
    {
        $category = Category::findorfail(6);
        $datas = Sub_categories::where('cat_id', '=', 6)->get();
        return view('backend.career.create', compact('datas', 'category'));
    }

    public function store(Request $request)
    {

        $data = [];
        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['job_title'] = $request->job_title;
        $data['vacancy'] = $request->vacancy;
        $myDate = $request->date;
        $data['date'] = $myDate;
        $data['employment_status'] = $request->employment_status;
        $data['age'] = $request->age;
        $data['education'] = $request->education;
        $data['experience'] = $request->experience;
        $data['location'] = $request->location;
        $data['responsibilities'] = $request->responsibilities;
        $data['compensation'] = $request->compensation;

        Contents::create($data);

        $profID = Contents::where('subcats_id', '=', 23)->first();
        $profID = $profID['subcats_id'];
        // dd($profID);

        if ($profID === 23) {
            return redirect()->route('career.professional')->with('message', 'Insert Successfully!');
        } else {
            return redirect()->route('career.articleship')->with('message', 'Insert Successfully!');
        }
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $category = Category::findorfail(6);
        $datas = Sub_categories::where('cat_id', '=', 6)->get();
        // dd($datas);
        return view('backend.career.edit', compact('datas', 'data', 'category'));
    }

    public function update(Request $request, $id)
    {

        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['job_title'] = $request->job_title;
        $data['vacancy'] = $request->vacancy;
        $myDate = $request->date;
        $data['date'] = $myDate;
        $data['employment_status'] = $request->employment_status;
        $data['age'] = $request->age;
        $data['education'] = $request->education;
        $data['experience'] = $request->experience;
        $data['location'] = $request->location;
        $data['responsibilities'] = $request->responsibilities;
        $data['compensation'] = $request->compensation;




        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('career.professional')->with('message', 'Updated successfully');
    }


    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
