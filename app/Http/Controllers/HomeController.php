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

    public function CategoryHouse(){
        $data = house::all();
        return view("categoryHouse",compact("data"));

    }

    public function CategoryApartment(){
        $data = house::all();
        return view("categoryApartment",compact("data"));

    }

    public function CategoryStudio(){
        $data = house::all();
        return view("categoryStudio",compact("data"));

    }

    public function CategoryVilla(){
        $data = house::all();
        return view("categoryVilla",compact("data"));

    }

    public function CreateAnnonce(){
        return view("createAnnonce");
    }

    public function Interesse(){
        return view("interesse");
    }

    public function upload(Request $request){
        $data = new house;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('houseimage',$imagename);

        $data->image = $imagename;
        $data->description = $request->description;
        $data->adresse = $request->adress;
        $data->surface = $request->surface;
        $data->prix = $request->prix;
        $data->categorie = $request->categorie;
        
        $data->save();

        return redirect()->back();
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
