<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog_cats;
use App\Models\Blogs;
use App\Models\ThemeOptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blogs::all();
        return view('backend.blog.index', compact('data'));
    }

    public function create()
    {
        $datas = Blog_cats::get();
        return view('backend.blog.create', compact('datas'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['blog_cat_id'] = $request->blog_cat_id;
        $data['title'] = $request->title;
        $data['date'] = date("Y-m-d");
        $data['short_description'] = $request->short_description;
        $data['long_description'] = $request->long_description;
        $data['quotation'] = $request->quotation;
        $data['tags'] = $request->tags;
        $user = Auth::user()->name;
        $data['uploaded_by'] = $user;
        $data['comment'] = $request->comment;

        // dd($data);


        // image

        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/blogimage/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }


        Blogs::create($data);
        return redirect()->route('blog.index')->with('message', 'Insert Successfully!');
    }

    // public function details($id)
    // {
    //     $data = Blogs::findorfail($id);
    //     $catdatas = Blog_cats::get();
    //     return view('backend.blog.blog-details', compact('data', 'catdatas'));
    // }

    public function details()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend\pages\media\blog-details', compact('setting'));
    }

    public function edit($id)
    {
        $data = Blogs::findorfail($id);
        $catdatas = Blog_cats::get();
        return view('backend.blog.edit', compact('data', 'catdatas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\iso27002\iso27002Assessments  $iso27002Assessments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['blog_cat_id'] = $request->blog_cat_id;
        $data['title'] = $request->title;
        $data['date'] = date("Y-m-d");
        $data['short_description'] = $request->short_description;
        $data['long_description'] = $request->long_description;
        $data['quotation'] = $request->quotation;
        $data['tags'] = $request->tags;
        $data['uploaded_by'] = $request->uploaded_by;
        $data['comment'] = $request->comment;

        // image
        if ($request->file('image')) {
            $rand = rand(10, 100);
            $imageName = time() . $rand . '.' . $request->image->extension();
            // $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/backendsite/blogimage/'), $imageName);
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }

        DB::table('blogs')->where('id', $request->id)->update($data);

        return redirect()->route('blog.index')->with('message', 'Updated successfully');
    }


    public function destroy($id)
    {
        $data = Blogs::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
