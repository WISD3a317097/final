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
}
