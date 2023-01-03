<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\House;
use App\Models\Interess;


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

    public function Interesse($id){
        return view("interesse",compact("id"));
    }

    public function InteresseForm($id){
        return view("interesse",compact("id"));
    }

    public function upload(Request $request){
        $data = new Interess;

        $data->house_id = $request->house_id;
        $data->nom = $request->nom;
        $data->prenom = $request->prenom;
        $data->numero = $request->numero;
        $data->date_debut = $request->date_debut;
        $data->date_fin = $request->date_fin;
        
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
