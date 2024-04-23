<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::all(); //eloquent ORM
        return view('backend.category.index', compact('data'));
    }



    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:55',
        ]);


        Category::insert([
            'category_name' => $request->category_name,
        ]);

        // $notification = array('message' => 'Category Inserted!', 'alert-type' => 'success');
        return redirect()->route('category.index')->with('message', 'Category Inserted!');
    }

    public function edit($id)
    {
        $data = Category::findorfail($id);
        return view('backend.category.edit', compact('data'));

    }

    public function update(Request $request){

        $category=Category::where('id',$request->id);
        $category->update([
            'category_name'=>$request->category_name
        ]);

        $notification=array('message' =>'Category Updated!','alert-type' => 'success');
        return redirect()->route('category.index')->with($notification);
    }

    public function destroy($id){
        $category=Category::find($id);
        $category->delete();
        $notification=array('message' => 'Category Deleted!', 'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }
}
