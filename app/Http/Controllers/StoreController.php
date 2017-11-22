<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Exception;
use App\Http\Requests;
use App\Http\Model\Foodlist;
use App\Http\Model\Shop;

class StoreController extends Controller
{
    //
    public function index(){
        return view('shop_index');
    }
    public function goods_management(){
        return view('shop_management');
    }
    public function goods_update(){
        return view('shop_edit');
    }
    public function get_all(Request $request){
        $shop=new Shop;
        $all=$shop->where('city','like','%'.'北')->get();
        echo $all;
        
    }
    public function setting(){
        return view('shop_setting');
    }
}
