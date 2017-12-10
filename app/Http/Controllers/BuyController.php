<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \Exception;
use App\Http\Model\Foodlist;
use App\Http\Model\Shop;

class BuyController extends Controller
{
    public function get_goods(Request $request,Foodlist $food,Shop $shop){
        $all=$request['Shop'];
        try{
            for($i=0;$i<count($all);$i++){
                $ans=$food::where("food_id",$all[$i])->first();
                $data[]=array("food_id"=>$ans->food_id,"amount"=>$ans->amount,"food"=>$ans->food,"money"=>$ans->money);
                $s=$ans->shop_id;
            }
            $time=$shop::find($s)->first();
            $reserve[]=array('morning'=>$time['moring'],'afternoon'=>$time['afternoon'],'night'=>$time['night'],'midnight'=>$time['midnight']);
              
            
            
        }catch(\Exception $e){
            #echo $e;
            return response()->json(['success' => '0']);
        }
        return response()->json(['success'=>'1','data'=>$data,'time'=>$reserve]);
    }
    public function checkout(Request $request){
        echo "AA";
    }
}
