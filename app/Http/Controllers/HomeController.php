<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\SettingModel;
use App\Models\HomeModel;
use App\Models\ServicesModel;
use App\Models\SiteinfoModel;
use App\Models\NewsModel;
use App\Models\SliderModel;
use App\Models\TeamModel;
use App\Models\About_GalleriesModel;
use App\Models\WhyusModel;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function index()
    {

        $sitesetting = SettingModel::all();
        $home_page = HomeModel::all();
        $sliders = SliderModel::orderBy('id', 'desc')->where('view','1')->get();
        $news = NewsModel::orderBy('id', 'desc')->where('view','1')->take(3)->get();
        $team= TeamModel::orderBy('id', 'desc')->where('view','1')->take(3)->get();
        $site_info = SiteinfoModel::all();
        $services = ServicesModel::orderBy('id', 'desc')->where('view','1')->take(9)->get();
        $about_gallery_left = About_GalleriesModel::orderBy('id', 'desc')->where([['view', '=', '1'],['location', '=', '1']])->get();
        $about_gallery_right = About_GalleriesModel::orderBy('id', 'desc')->where([['view', '=', '1'],['location', '=', '0']])->get();

        return View("pages.home",compact('sliders','team','site_info','home_page','services','news','sitesetting','about_gallery_right','about_gallery_left'));
    }

    public function about()
    {

        $sitesetting = SettingModel::all();
        $site_info =SiteinfoModel::all();
        $Whyus =WhyusModel::orderBy('id', 'desc')->where([['view', '=', '1']])->get();;
        
        $about_gallery_left = About_GalleriesModel::orderBy('id', 'desc')->where([['view', '=', '1'],['location', '=', '1']])->get();
        $about_gallery_right = About_GalleriesModel::orderBy('id', 'desc')->where([['view', '=', '1'],['location', '=', '0']])->get();

        return View("pages.about",compact('Whyus','site_info','sitesetting','about_gallery_right','about_gallery_left'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $sitesetting = SettingModel::all();
        return view('partials.header', compact('sitesetting'));
      }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
