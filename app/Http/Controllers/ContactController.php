<?php

namespace App\Http\Controllers;
//namespace App\Mail;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\MessageBag;
use DB;
use App\Http\Requests;
use App\Models\SiteinfoModel;
use App\Models\MessagesModel;
use App\Models\SettingModel;

use Illuminate\Pagination\LengthAwarePaginator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $site_info = SiteinfoModel::all();
        $data = SettingModel::all();
       return View("pages.contact",compact('data','site_info'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //.
        $site_info = SiteinfoModel::all();
        $data = SettingModel::all();
       return View("pages.contact",compact('data','site_info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //ه
        $data=$request->all();
       $contact_message =MessagesModel::create([
           'name' => $request->get('title'),
           'phone' => $request->get('phone'),
           'message' => $request->get('msg'),
           'mail' => $request->get('email'),

       ]);

//هو دى ليه


//هو دى ليه
        $data = [
            'name' => $request->input('title'),
            'msg' => $request->input('msg'),
            'phone'=>$request->input('phone'),
            'email' => $request->get('email'),
        ];
     //   print_r($data);
   // die();


        $title=$request->input('title');
       $email=$request->input('email');
       $phone=$request->input('phone');

       $msg=$request->input('msg');

//هو دى ليه
Mail::send('pages.email', $data, function ($message) use ($title, $email)
       {
           $message->from($email,$title);
           $message->to('ashraf.m@wisyst.com');
           $message->subject('رسالة جديدة');
       });

       echo 1;



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function contactUSPost(Request $request)
   {
    $data=$request->all();
       $contact_message = MessagesModel::create([
           'name' => $request->post('title'),
           'phone' => $request->post('phone'),
           'msg' => $request->post('message'),
       ]);




       ///$contact_message=App\Models\Contact_message::create($data);
      /* $title=$request->input('title');
       $phone=$request->input('phone');
       $msg=$request->input('msg');*/


       /*$data = [
           'title' => $request->input('title'),
           'msg' => $request->input('msg'),
           'phone'=>$request->input('phone'),
       ];
       Mail::send('email', $data, function ($message) use ($name, $email,$subject)
       {
           $message->from($email,$name);
           $message->to('ashraf.m@wisyst.com');
           $message->subject('موقع مدى' );
       });*/

      // return back()->with('msg', 'شكرا لك للتواصل معنا');
   }
}
