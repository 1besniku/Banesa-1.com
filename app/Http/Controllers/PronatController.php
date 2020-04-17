<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Property;
use App\toka;
use App\User;
use Illuminate\Http\Request;
use \Intervention\Image\Facades\Image;
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
  // dd($request->all());
        if ($request->filename == null) {
            return back();
        } else {
            $request->validate([
                "objekti" => 'required',
                "numriparceles" => 'required',
                "zonakadastrale" => 'required',
                "kati" => 'nullable',
                "lloji" => "required",
                "place" => "required",
                "komuna" => "required",
                "rooms" => "nullable|integer",
                "ngrohja" => "nullable|string",
                "bathroom" => "nullable|integer|",
                "adresa" => "required",
                "price" => "required",
                "komenti" => "required",
                'phone' => 'required',
                'filename.*' => 'required|file|mimes:jpeg,jpg,png,svg,gif'

            ]);


            $pronat = Property::create([
                'aprovimi' => 0,
                'user_id' => auth()->user()->id,
                'llojishpalljes' => $request->objekti,
                'numri_parceles' => $request->numriparceles,
                'zona_kadastrale' => $request->zonakadastrale,
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
                //  'foto' => $arr


            ]);
            // dd($pronat->foto);
            if ($request->hasfile('filename')) {

                foreach ($request->file('filename') as $image) {

                    $fileName = uniqid() . $image->getClientOriginalName();
                    $test = $image->move(public_path('/images/'), $fileName);
                    // dd($test);
                    $img = Image::make(public_path('/images/' . $fileName))->resize(300, 200);
                    $data[] = $fileName;
                    $img->save();

                }
                $arr = implode(',', $data);
               // dd($arr);
                $pronat->update([
                    'foto' => $arr,
                ]);
            }
        }

        return redirect('/pronat')->with('status', 'Shpallja u postua, ju lutem prisni per aporvim!');
    }


}


