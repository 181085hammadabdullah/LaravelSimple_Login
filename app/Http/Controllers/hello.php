<?php

namespace App\Http\Controllers;
use App\users;
use Illuminate\Http\Request;
use DB;
class hello extends Controller
{
    public function index(){
       $all=DB::table('users')->get();
       dd($all); 
       
    }
    public function joining(){
        $result=DB::table('orders')
        ->join('users','users.id','=','orders.user_id')->get();
        dd($result); 
        
     }
     public function Model(){
        $result=users::all();
        dd($result);
        
     }
}
