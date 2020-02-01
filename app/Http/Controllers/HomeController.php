<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\ClientModel;
use App\Models\SettingModel;
use App\Models\HomeModel;
use App\Models\ServicesModel;
use App\Models\SiteinfoModel;
use App\Models\NewsModel;
use App\Models\SliderModel;

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
        $works = ClientModel::orderBy('id', 'desc')->take(10)->get();;
        $home_page = HomeModel::all();
        $sliders = SliderModel::all();
        $news = NewsModel::orderBy('id', 'desc')->take(10)->get();;
        $site_info = SiteinfoModel::all();
        $services = ServicesModel::orderBy('id', 'desc')->take(10)->get();;
        return View("pages.home",compact('sliders','site_info','home_page','services','news','sitesetting','works'));
    }

    public function about()
    {

        $sitesettings =DB::table("site_settings")->where('id','1')->first();
        $site_info =SiteinfoModel::all();
        return View("pages.about",compact('site_info','sitesettings'));
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
