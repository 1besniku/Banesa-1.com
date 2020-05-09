<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Property;
use App\User;
use Illuminate\Http\Request;

class DetajeController extends Controller
{
    //

    public function index($id){
        //dd($id);

        $property = Property::find($id);

        $explode = explode(',',$property->foto);
        $arr = ($explode[0]);
        $user = User::find($property->user_id);

        return view('shpalljet.show', compact('property', 'user', 'explode', 'arr'));

    }
    public function about(){

        return view('rrethNesh.index');
    }

}
