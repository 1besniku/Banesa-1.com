<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Property;
use App\User;
use Illuminate\Http\Request;

class DetajeController extends Controller
{
    //

    public function shtepi($slug){
        //dd($id);

        $property = Property::find($slug);

        $explode = explode(',',$property->foto);
        $arr = ($explode[0]);
        $user = User::find($property->user_id);

        return view('shpalljet.show', compact('property', 'user', 'explode', 'arr'));

    }
    public function banesa($slug){
        //dd($id);
        $property = Property::find($slug);

        $explode = explode(',',$property->foto);
        $arr = ($explode[0]);
        $user = User::find($property->user_id);

        return view('shpalljet.banesat_show', compact('property', 'user', 'explode', 'arr'));
    }

    public  function lokaletshow($slug){
        //dd($id);
        $property = Property::find($slug);

        $explode = explode(',',$property->foto);
        $arr = ($explode[0]);
        $user = User::find($property->user_id);

        return view('lokalet.show', compact('property', 'user', 'explode', 'arr'));
    }
    public function deatjet($slug){
        //dd($id);
        $property = Property::find($slug);

        $explode = explode(',',$property->foto);
        $arr = ($explode[0]);
        $user = User::find($property->user_id);

        return view('lokalet.show', compact('property', 'user', 'explode', 'arr'));


    }
    public function about(){

        return view('rrethNesh.index');
    }

}
