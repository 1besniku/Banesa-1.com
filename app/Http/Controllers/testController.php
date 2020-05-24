<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function index(){


        return view('layouts.test');
    }
    public function store(Request $request){
        //dd($request);
    }
}
