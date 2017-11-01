<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/login2',function(){
    return view('login2');
});
Route::group(['prefix' => 'store/admin'],function(){
    Route::get('/',function(){
        return view('shop_index');
    });
});
Route::group(['prefix' => 'member/admin'],function(){
    Route::get('/','MemberController@index');
    Route::get('/setting','MemberController@setting');
    
});
#api
Route::group(['prefix' => 'rest/api'], function () {
    Route::post('/login','AdminController@login');
    Route::post('/register','AdminController@register');
    Route::post('/shop_login','AdminController@storelogin');
   
});