<?php

namespace App\Http\Controllers;

use App\Models\Blogs as ModelsBlogs;
use App\Models\Contents;
use App\Models\homepage\Whoweare;

use App\Models\Slider;
use App\Models\Sub_categories;
use App\Models\ThemeOptions;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $setting = ThemeOptions::findOrFail(1);
        $slider = Slider::all();
        $Whoweare = Whoweare::findOrFail(1);
        $serviceCat = Sub_categories::where('cat_id', 2)->paginate(4);
        $clients = Contents::where('category_id', '=', 3)->whereIn('subcats_id', [15, 16])->get();
        $teams = Contents::where('subcats_id', '=', 2)->get();
        $enlists = Contents::where('subcats_id', '=', 4)->get();
        $regulates = Contents::where('category_id', '=', 7)->get();
        $blogs = ModelsBlogs::latest()->take(3)->get();
        $buletin = Contents::where('subcats_id', '=', 18)->get();

        return view('frontend.index', compact('setting', 'slider', 'Whoweare', 'serviceCat', 'clients', 'teams','enlists','regulates','blogs', 'buletin' ));
    }
}
