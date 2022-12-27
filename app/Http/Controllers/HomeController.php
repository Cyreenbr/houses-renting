<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\House;

class HomeController extends Controller
{
    public function index(){

        $data =  house::all();
        return view("home",compact("data"));
    }

    public function byCategory(){
        $house = "maison" ;
        $data = house::all();
        return view("byCategory",compact("data"));

    }

    public function redirects(){

       $data =  house::all();
       $usertype = Auth::user()->usertype;

       if( $usertype == '1') {
               return view("admin.adminhome") ;
       }else{
                return view("home",compact('data'));
       }
    }
}
