<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function index(){

        $property = Property::all();
        //dd($property);
        return view('layouts.test', compact('property'));
    }
    public function store(Request $request){
        //dd($request);
    }
    public  function show(Request $request){
      //dd($request);

        $search = Property::where('llojishpalljes' , '=' , $request->objketi)->orWhere('komuna','=', $request->komuna)->get();

        $arr =  response()->json($search);

        return view('layouts.test', compact('arr'));


    }
}
