<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/','HomeController@index');
Route::get('/about','HomeController@about');
Route::get('/services','ServiceController@index');
Route::get('/details/{id}', 'ServiceController@show');
Route::get('/works','ClientsController@index');

Route::get('/news','EventsController@index');
Route::get('/news-details/{id}', 'EventsController@show');

Route::get('/contact','ContactController@index');
Route::get('/contact_action','ContactController@store');
Route::post('/contact_action','ContactController@store');

//Route::post('/contact', ['as'=>'contactus.store','uses'=>'ContactController@store']);
//Route::get('contact', 'ContactController@contactUSPost');
