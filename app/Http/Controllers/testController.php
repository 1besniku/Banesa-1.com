<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function index(){
        return view('layouts.test');
    }
    public function store(Request $request){
        dd($request);
    }
}
