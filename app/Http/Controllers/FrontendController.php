<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Category;
use App\Models\Contents;
use App\Models\ThemeOptions;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function companyprofile()
    {
        $setting = ThemeOptions::findOrFail(1);
        $profile = Contents::findOrFail(1);
        return view('frontend.pages.aboutus.company-profile', compact('setting', 'profile'));
    }
    public function meetourteam()
    {
        $setting = ThemeOptions::findOrFail(1);
        $teams = Contents::where('subcats_id', '=', 2)->get();
        return view('frontend.pages.aboutus.meetourteam', compact('setting', 'teams'));
    }
    public function affiliation()
    {
        $setting = ThemeOptions::findOrFail(1);
        $affiliations = Contents::where('subcats_id', '=', 7)->get();
        return view('frontend.pages.aboutus.affiliation', compact('setting', 'affiliations'));
    }
    public function enlistment()
    {
        $setting = ThemeOptions::findOrFail(1);
        $enlistments = Contents::where('subcats_id', '=', 4)->get();
        return view('frontend.pages.aboutus.enlistment', compact('setting', 'enlistments'));
    }

    public function membership()
    {
        $setting = ThemeOptions::findOrFail(1);
        $members = Contents::where('subcats_id', '=', 6)->get();
        return view('frontend.pages.aboutus.membership', compact('setting', 'members'));
    }

    public function standards()
    {
        $setting = ThemeOptions::findOrFail(1);
        $members = Contents::where('subcats_id', '=', 6)->get();
        return view('frontend.pages.aboutus.standards', compact('setting', 'members'));
    }


    public function faqs()
    {
        $setting = ThemeOptions::findOrFail(1);
        $members = Contents::where('subcats_id', '=', 6)->get();
        return view('frontend.pages.aboutus.faqs', compact('setting', 'members'));
    }



    public function auditassurance()
    {
        $setting = ThemeOptions::findOrFail(1);
        $audits = Contents::where('subcats_id', '=', 8)->get();
        return view('frontend.pages.services.auditassurance', compact('setting', 'audits'));
    }
    public function taxationvat()
    {
        $setting = ThemeOptions::findOrFail(1);
        $taxes = Contents::where('subcats_id', '=', 9)->get();
        return view('frontend.pages.services.taxationvat', compact('setting', 'taxes'));
    }
    public function advisory()
    {
        $setting = ThemeOptions::findOrFail(1);
        $advisories = Contents::where('subcats_id', '=', 10)->get();
        return view('frontend.pages.services.advisory', compact('setting', 'advisories'));
    }
    public function secretariallicensingcompliance()
    {
        $setting = ThemeOptions::findOrFail(1);
        $secrets = Contents::where('subcats_id', '=', 11)->get();
        return view('frontend.pages.services.secretariallicensingcompliance', compact('setting', 'secrets'));
    }
    public function businessservice()
    {
        $setting = ThemeOptions::findOrFail(1);
        $businesses = Contents::where('subcats_id', '=', 12)->get();
        return view('frontend.pages.services.businessservice', compact('setting', 'businesses'));
    }
    public function humanresource()
    {
        $setting = ThemeOptions::findOrFail(1);
        $humans = Contents::where('subcats_id', '=', 13)->get();
        return view('frontend.pages.services.humanresource', compact('setting', 'humans'));
    }

    public function trainingdevelopment()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.trainingdevelopment', compact('setting'));
    }

    public function actuarial()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.actuarial', compact('setting'));
    }

    public function ipr()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.ipr', compact('setting'));
    }


    // client menu page start
    public function financialinstitutions()
    {
        $setting = ThemeOptions::findOrFail(1);
        $financeins = Contents::where('subcats_id', '=', 15)->orderBy('name', 'asc')->get();
        return view('frontend.pages.client.financialinstitutions', compact('setting', 'financeins'));
    }
    public function govtSemiGovtlistedcompanies()
    {
        $setting = ThemeOptions::findOrFail(1);
        $govs = Contents::where('subcats_id', '=', 16)->orderBy('name', 'asc')->get();
        return view('frontend.pages.client.listedcompanies', compact('setting', 'govs'));
    }

    public function Foreignclient()
    {
        $setting = ThemeOptions::findOrFail(1);
        $foreigns = Contents::where('subcats_id', '=', 17)->orderBy('name', 'asc')->get();
        return view('frontend.pages.client.foreignclient', compact('setting', 'foreigns'));
    }

    public function alllisted()
    {
        $setting = ThemeOptions::findOrFail(1);
        $foreigns = Contents::where('subcats_id', '=', 17)->orderBy('name', 'asc')->get();
        return view('frontend.pages.client.alllisted', compact('setting', 'foreigns'));
    }



    public function internationalclients()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.client.internationalclients', compact('setting'));
    }

    // media Tab
    public function newsletter()
    {
        $setting = ThemeOptions::findOrFail(1);
        $buletin = Contents::where('subcats_id', '=', 18)->get();
        return view('frontend.pages.media.newsletter', compact('setting', 'buletin'));
    }

    public function newsletterDetails($id)
    {
        $setting = ThemeOptions::findOrFail(1);
        $newsletter = Contents::findorfail($id);
        return view('frontend.pages.media.news-details', compact('setting', 'newsletter'));
    }

    public function blog()
    {
        $setting = ThemeOptions::findOrFail(1);
        $blogs = Blogs::paginate(9);
        return view('frontend.pages.media.blog', compact('setting', 'blogs'));
    }
    public function blogDetails($id)
    {
        $setting = ThemeOptions::findOrFail(1);
        $blog = Blogs::findorfail($id);
        return view('frontend.pages.media.blog-details', compact('setting', 'blog'));
    }

    public function publication()
    {
        $setting = ThemeOptions::findOrFail(1);
        $publications = Contents::where('subcats_id', '=', 20)->get();
        return view('frontend.pages.media.publication', compact('setting', 'publications'));
    }

    public function gallery()
    {
        $setting = ThemeOptions::findOrFail(1);
        $galleries = Contents::where('subcats_id', '=', 21)->get();
        return view('frontend.pages.media.gallery', compact('setting', 'galleries'));
    }

    public function events()
    {
        $setting = ThemeOptions::findOrFail(1);
        $events = Contents::where('subcats_id', '=', 22)->get();
        return view('frontend.pages.media.events', compact('setting', 'events'));
    }

    public function professional()
    {
        $setting = ThemeOptions::findOrFail(1);
        $category = Category::get();
        $profs = Contents::where('subcats_id', '=', 23)->get();
        return view('frontend.pages.career.professional', compact('setting', 'category', 'profs'));
    }

    public function articleship()
    {
        $setting = ThemeOptions::findOrFail(1);
        $articles = Contents::where('subcats_id', '=', 24)->get();
        return view('frontend.pages.career.articleship', compact('setting', 'articles'));
    }

    public function regulators()
    {
        $setting = ThemeOptions::findOrFail(1);
        $regulators = Contents::where('category_id', '=', 7)->get();
        return view('frontend.pages.regulators', compact('setting', 'regulators'));
    }

    public function contact()
    {
        $setting = ThemeOptions::findOrFail(1);
        $contacts = Contents::where('category_id', '=', 8)->get();
        return view('frontend.pages.contact', compact('setting', 'contacts'));
    }



    //  publication gallery events professional articleship regulators contact



}
