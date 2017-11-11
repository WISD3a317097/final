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
#會員api＋登入註冊
Route::group(['prefix' => 'rest/api'], function () {
    Route::post('/login','AdminController@login');
    Route::post('/register','AdminController@register');
    Route::post('/shop_login','AdminController@storelogin');
    Route::post('/setting','AdminController@setting');
    Route::post('/setting/shop','AdminController@shop');
    Route::post('/setting/recommend','AdminController@recommend');
    Route::post('/setting/disturb','AdminController@disturb');
});
Route::group(['prefix'=>'rest/api/shop'],function(){
    Route::post('upload','ShopController@upload');
});
# shop api
