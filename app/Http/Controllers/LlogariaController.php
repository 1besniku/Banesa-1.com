<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class LlogariaController extends Controller
{
    //
    public function index()
    {

        $accont = Property::where('user_id', '=', auth()->user()->id)->where('aprovimi', '=', 1)->get();

            return view('llogaria.index',compact('accont'));


    }

    public function delete($id)
    {
        // dd($id);

        $property = Property::find($id);
        $property->delete();

        return redirect('/accont')->with('status', 'Shpallja juaj u fshi!');
    }
}
