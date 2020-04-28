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
        $collection = $accont->isEmpty();
            if($collection == true){
                return view('llogaria.index1');
            }else {
                return view('llogaria.index', compact('accont'));
            }

    }

    public function delete($id)
    {
        // dd($id);

        $property = Property::find($id);
        $property->delete();

        return redirect('/accont')->with('status', 'Shpallja juaj u fshi!');
    }
}
