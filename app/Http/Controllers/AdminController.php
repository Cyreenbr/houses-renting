<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\House;

class AdminController extends Controller
{
    public function user(){
        $data = user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function ttMaisons(){
        $data = house::all();
        return view("admin.ttMaisons",compact("data"));
    }

    public function CreateHouse(){
        return view("admin.CreateHouse");
    }

    public function updateview($id){

        $data = house::find($id);
        
        return view("admin.updateview",compact("data"));
    }

    public function update(Request $request,$id){

        $data = house::find($id);
        
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

    public function deletehouse($id){

        $data = house::find($id);
        $data->delete();

        return redirect()->back();
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

}
