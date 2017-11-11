<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    public function upload(Request $request){
        $goods=$request['id'];
        $goods_money=$request['money'];
        $url=$request['url'];
        if($url!=0){

        }
        else{
            
        }
        echo $url;
    }
}
