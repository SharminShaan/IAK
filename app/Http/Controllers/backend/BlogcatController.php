<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog_cats;
use Illuminate\Http\Request;

class BlogcatController extends Controller
{
    public function index()
    {
        $data = Blog_cats::all(); //eloquent ORM
        return view('backend.blogcat.index', compact('data'));
    }



    public function create()
    {
        return view('backend.blogcat.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'blog_cat_name' => 'required|unique:blog_cats|max:55',
        ]);
        Blog_cats::insert([
            'blog_cat_name' => $request->blog_cat_name,
        ]);

        // $notification = array('message' => 'Category Inserted!', 'alert-type' => 'success');
        return redirect()->route('blogcat.index')->with('message', 'Blog Category Inserted!');
    }

    public function edit($id)
    {
        $data = Blog_cats::findorfail($id);
        return view('backend.blogcat.edit', compact('data'));

    }

    public function update(Request $request){

        $data=Blog_cats::where('id',$request->id);
        $data->update([
            'blog_cat_name'=>$request->blog_cat_name
        ]);

        $notification=array('message' =>'Blog Category Updated!','alert-type' => 'success');
        return redirect()->route('blogcat.index')->with($notification);
    }

    public function destroy($id){
        $data=Blog_cats::find($id);
        $data->delete();
        $notification=array('message' => 'Blog Category Deleted!', 'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }
}
