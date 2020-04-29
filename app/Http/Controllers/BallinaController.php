<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Property;

class BallinaController extends Controller
{
    //
    public function index(){
        $arr = \App\Property::all();
        return view('ballina.index',compact('arr'));
    }
}
