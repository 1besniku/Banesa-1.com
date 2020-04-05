<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Property;

class AprovimiController extends Controller
{
    //
    public function index(){
        $property = \App\Property::latest()->get();


        return view('Aprovimi.index', compact('property', 'tokat'));
    }
    public function update(Request $request)
    {

        $request->validate([
            'app' => 'required',
            'id' => 'required'
        ]);

        $property = \App\Property::find($request->id);

        $property->update([
            'aprovimi' => $request->app
        ]);
        return "u aprovua me sukses";
    }

        public function destroy($id)
        {

            $porperty =\App\Property::find($id);
            $porperty->delete();

            return redirect('/aprovim');
        }



}
