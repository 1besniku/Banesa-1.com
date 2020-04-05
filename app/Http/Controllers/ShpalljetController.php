<?php

namespace App\Http\Controllers;

use App\Property;

use Illuminate\Http\Request;
use App\User;

class ShpalljetController extends Controller
{
    //
    public function index(){

        $pronat = Property::all();

        return view('Shpalljet.index', compact('pronat'));
    }
}
