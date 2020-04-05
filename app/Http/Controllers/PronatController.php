<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Property;
use App\toka;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PronatController extends Controller
{
    //

    public function index()
    {

        return view('Pronat.index');
    }



    public function store(Request $request)
    {
       dd($request->filename);

        $request->validate([
            "objekti" => 'required',
            "numriparceles" => 'required',
            "zonakadastrale" => 'required',
            "kati" => 'required',
            "lloji" => "required",
            "place" => "required",
            "komuna" => "required",
            "rooms" => "required",
            "ngrohja" => "required",
            "bathroom" => "required",
            "adresa" => "required",
            "price" => "required",
            "komenti" => "required",
            'phone' => 'required',
            'filename.*' => 'file|mimes:jpeg,jpg,png,svg,gif'

        ]);

            if ($request->hasfile('filename')) {

                foreach ($request->file('filename') as $image) {
                    $name = uniqid() . $image->getClientOriginalName();
                    $image->store('uploads', 'public');
                    $data[] = $name;
                }
            }
            $arr = implode(',', $data);

        $pronat = Property::create([
            'aprovimi' => 0,
            'user_id' => auth()->user()->id,
            'llojishpalljes' => $request->objekti,
            'numri_parceles' => $request->numriparceles,
            'zona_kadastrale'=>$request->zonakadastrale ,
            'lloji' => $request->lloji,
            'siperfaqja' => $request->place,
            'komuna' => $request->komuna,
            'adresa' => $request->adresa,
            'numri_banjove' => $request->bathroom,
            'numri_dhomave' => $request->rooms,
            'numri_tel' => $request->phone,
            'qmimi' => $request->price,
            'komenti' => $request->komenti,
            'ngrohja' => $request->ngrohja,
            'kati' => $request->kati,
            'foto' => $arr


        ]);


        return redirect('/pronat')->with('u regjistrua');
    }



}


