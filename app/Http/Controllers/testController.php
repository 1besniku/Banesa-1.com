<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function index(){
        $property = Property::find(10);
        //dd($property);
        $explode = explode(',',$property->foto);
       //dd($explode);


        $arr = ($explode[0]);
        $user = User::find($property->user_id);
        return view('layouts.test', compact('property','explode'));
    }
    public function store(Request $request){
        //dd($request);
    }
}
