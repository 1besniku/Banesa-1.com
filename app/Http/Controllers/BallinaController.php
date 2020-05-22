<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Property;

class BallinaController extends Controller
{
    //
    public function index(){
        $arr = \App\Property::latest()->paginate(7);
        return view('ballina.index',compact('arr'));
    }

    public function sherbimet(){
        return view('sherbimet.sherbimet');
    }

    public function  show($id){

        $property = \App\Property::find($id);

        $explode = explode(',',$property->foto);
        $arr = ($explode[0]);
        $user = User::find($property->user_id);

        return view('ballina.show', compact('property', 'user', 'explode', 'arr'));


    }
}
