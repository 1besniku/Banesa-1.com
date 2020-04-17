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

        $user = User::find($property->user_id);

        return view('Shpalljet.show', compact('property', 'user', 'explode'));

    }
    public function about(){

        return view('RrethNesh.index');
    }
}
