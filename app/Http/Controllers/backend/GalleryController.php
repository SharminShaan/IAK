<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contents;
use App\Models\Sub_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index()
    {
        $data = Contents::where('subcats_id', '=', 21)->get();
        return view('backend.gallery.index', compact('data'));
    }

    public function create()
    {
        $category = Category::findorfail(5);
        $datas = Sub_categories::findorfail(21);
        return view('backend.gallery.create', compact('datas', 'category'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['title'] = $request->title;
        $data['short_description'] = $request->short_description;


        //img
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        //img
        if ($request->file('image2')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image2->extension();
            $request->image2->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image2'] = $imageName;
        } else {
            unset($data['image2']);
        }

        //img
        if ($request->file('image3')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image3->extension();
            $request->image3->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image3'] = $imageName;
        } else {
            unset($data['image3']);
        }

        //img
        if ($request->file('image4')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image4->extension();
            $request->image4->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image4'] = $imageName;
        } else {
            unset($data['image4']);
        }

        //img
        if ($request->file('image5')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image5->extension();
            $request->image5->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image5'] = $imageName;
        } else {
            unset($data['image5']);
        }

        //img
        if ($request->file('image6')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image6->extension();
            $request->image6->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image6'] = $imageName;
        } else {
            unset($data['image6']);
        }

        Contents::create($data);
        return redirect()->route('gallery.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $category = Category::findorfail(5);
        $datas = Sub_categories::findorfail(21);

        return view('backend.gallery.edit', compact('data', 'category', 'datas'));
    }

    public function update(Request $request, $id)
    {

        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['title'] = $request->title;
        $data['short_description'] = $request->short_description;


        //img
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        //img
        if ($request->file('image2')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image2->extension();
            $request->image2->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image2'] = $imageName;
        } else {
            unset($data['image2']);
        }

        //img
        if ($request->file('image3')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image3->extension();
            $request->image3->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image3'] = $imageName;
        } else {
            unset($data['image3']);
        }

        //img
        if ($request->file('image4')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image4->extension();
            $request->image4->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image4'] = $imageName;
        } else {
            unset($data['image4']);
        }

        //img
        if ($request->file('image5')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image5->extension();
            $request->image5->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image5'] = $imageName;
        } else {
            unset($data['image5']);
        }

        //img
        if ($request->file('image6')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image6->extension();
            $request->image6->move(public_path('/backendsite/gallery/'), $imageName);
            $data['image6'] = $imageName;
        } else {
            unset($data['image6']);
        }

        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('gallery.index')->with('message', 'Updated successfully');
    }


    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
