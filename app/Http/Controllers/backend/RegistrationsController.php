<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Registrations;
use App\Models\ThemeOptions;
use Illuminate\Http\Request;

class RegistrationsController extends Controller
{

    public function eventindex()
    {
        $data = Registrations::where('type', '=', 1)->paginate(20);
        return view('backend.registration.index', compact('data'));
    }

    public function eventcreate($id)
    {
        $setting = ThemeOptions::findOrFail(1);
        $data = Category::findorfail($id);
        return view('frontend.pages.career.apply', compact('data', 'setting'));
    }


    // Professional
    public function professionalindex()
    {
        $data = Registrations::where('type', '=', 2)->paginate(20);
        return view('backend.registration.index', compact('data'));
    }

    public function professionalcreate($id)
    {
        $setting = ThemeOptions::findOrFail(1);
        $data = Category::findorfail($id);
        return view('frontend.pages.career.apply', compact('data', 'setting'));
    }

    // article ship
    public function articleshipindex()
    {
        $data = Registrations::where('type', '=', 3)->paginate(20);
        return view('backend.registration.index', compact('data'));
    }

    public function articleshipcreate($id)
    {
        $setting = ThemeOptions::findOrFail(1);
        $data = Category::findorfail($id);
        return view('frontend.pages.career.apply', compact('data', 'setting'));
    }

    // contact

    public function contactindex()
    {
        $data = Registrations::where('type', '=', 4)->paginate(20);
        return view('backend.registration.index', compact('data'));
    }


    //  publication download
    public function publicationPdfindex()
    {
        $data = Registrations::where('type', '=', 5)->paginate(20);
        return view('backend.registration.index', compact('data'));
    }

    public function publicationPdfcreate($id)
    {
        $setting = ThemeOptions::findOrFail(1);
        $data = Category::findorfail($id);
        return view('frontend.pages.career.apply', compact('data', 'setting'));
    }

    // type, type_id, type_name, name, email, phone, address, image, doc_file, service_type, service_name, message

    public function store(Request $request)
    {
        $data = [];
        $data['type'] = $request->type;
        $data['type_id'] = $request->type_id;
        $data['type_name'] = $request->type_name;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;

        if ($request->file('service_name')) {
            $data['service_name'] = $request->service_name;
        } else {
            unset($data['service_name']);
        }

        if ($request->file('message')) {
            $data['message'] = $request->message;
        } else {
            unset($data['message']);
        }

        //img
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/registration/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        // pdf file etc
        if ($request->file('doc_file')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->doc_file->extension();
            $request->doc_file->move(public_path('/backendsite/registration/'), $imageName);
            $data['doc_file'] = $imageName;
        } else {
            unset($data['doc_file']);
        }

        Registrations::create($data);
        return redirect()->back()->with('message', 'Saved Successfully!');
    }



    // public function edit($id)
    // {
    //     $data = Registrations::findorfail($id);
    //     return view('backend.registration.edit', compact('data', 'category', 'datas'));
    // }

    // public function update(Request $request, $id)
    // {

    //     $data['category_id'] = $request->category_id;
    //     $data['subcats_id'] = $request->subcats_id;
    //     $data['title'] = $request->title;
    //     $data['short_description'] = $request->short_description;
    //     $data['type'] = 1;

    //     //img
    //     if ($request->file('image')) {
    //         $rand = rand(10, 100);
    //         $imageName = time() . $rand . '.' . $request->image->extension();
    //         $request->image->move(public_path('/backendsite/registrationimg/'), $imageName);
    //         $data['image'] = $imageName;
    //     } else {
    //         unset($data['image']);
    //     }

    //     if ($request->file('image2')) {
    //         $rand = rand(10, 100);
    //         $imageName = time() . $rand . '.' . $request->image2->extension();
    //         $request->image2->move(public_path('/backendsite/registrationimg/'), $imageName);
    //         $data['image2'] = $imageName;
    //     } else {
    //         unset($data['image2']);
    //     }

    //     if ($request->file('image3')) {
    //         $rand = rand(10, 100);
    //         $imageName = time() . $rand . '.' . $request->image3->extension();
    //         $request->image3->move(public_path('/backendsite/registrationimg/'), $imageName);
    //         $data['image3'] = $imageName;
    //     } else {
    //         unset($data['image3']);
    //     }


    //     DB::table('registrations')->where('id', $request->id)->update($data);

    //     return redirect()->route('registration.index')->with('message', 'Updated successfully');
    // }


    // public function destroy($id)
    // {
    //     $data = Registrations::find($id);
    //     $data->delete();
    //     return redirect()->back()->with('message', 'Deleted Successfully!');
    // }
}
