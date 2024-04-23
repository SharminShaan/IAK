<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Category;
use App\Models\Contents;
use App\Models\Sub_categories;
use App\Models\ThemeOptions;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    // public function index()
    // {
    //     return view('search.search');
    // }

    public function search(Request $request)
    {

        $setting = ThemeOptions::findOrFail(1);
        $search = $request->input('search');

        $contents = Contents::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('name', 'LIKE', "%{$search}%")
            ->get();

        $blogs = Blogs::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('long_description', 'LIKE', "%{$search}%")
            ->orWhere('short_description', 'LIKE', "%{$search}%")
            ->get();

        $categories = Category::query()
            ->where('category_name', 'LIKE', "%{$search}%")
            ->get();

        $subcategories = Sub_categories::query()
            ->where('sub_cat_name', 'LIKE', "%{$search}%")
            ->get();

        return view('frontend.pages.search', compact('contents', 'setting', 'blogs', 'categories', 'subcategories'));

        // if ($request->ajax()) {
        //     $output = "";
        //     $contents=DB::table('contents')->where('title','LIKE','%'.$request->search."%")->get();
        //     if ($contents) {
        //         foreach ($contents as $key => $content) {
        //             $output .= '<tr>' .
        //                 '<td>' . $contents->name . '</td>' .
        //                 '<td>' . $contents->title . '</td>' .
        //                 '<td>' . $contents->short_description . '</td>' .
        //                 '<td>' . $contents->designation . '</td>' .
        //                 '</tr>';
        //         }
        //         return Response($output);
        //     }
        // }
    }
}
