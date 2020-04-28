<?php

namespace App\Http\Controllers;

use App\Jobs\deleteOldProperty;
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

        return view('pronat.index');
    }


    public function store(Request $request)
    {
            // dd($request->all());
        if ($request->filename == null) {
            return back();
        } else {
            $request->validate([
                "objekti" => 'required',
                "kati" => 'required|nullable',
                "lloji" => "required",
                "place" => "required|numeric|min:2",
                "komuna" => "required",
                "burimi_nxemjes" => "required",
                "ballkonat" => "required",
                "rooms" => "required|integer",
                "ngrohja" => "required",
                "bathroom" => "nullable|integer|",
                "adresa" => "required",
                "price" => "required|numeric|min:2",
                "komenti" => "required",
                'phone' => 'required|min:9',
                'lat' => 'nullable|float',
                'lng' => 'nullable|float',
                'filename.*' => 'required|file|mimes:jpeg,jpg,png,svg,gif'

            ]);


            $property = Property::create([
                'aprovimi' => 0,
                'user_id' => auth()->user()->id,
                'llojishpalljes' => $request->objekti,
                'burimi_nxemjes' => $request->burimi_nxemjes,
                'ballkonat' => $request->ballkonat,
                'lloji' => $request->lloji,
                'siperfaqja' => $request->place,
                'komuna' => $request->komuna,
                'adresa' => $request->adresa,
                'numri_banjove' => $request->bathroom,
                'numri_dhomave' => $request->rooms,
                'numri_tel' => $request->phone,
                'qmimi' => $request->price,
                'lat' =>$request->lat,
                'lng' => $request->lng,
                'komenti' => $request->komenti,
                'ngrohja' => $request->ngrohja,
                'kati' => $request->kati,
                //  'foto' => $arr


            ]);
            // dd($pronat->foto);
            if ($request->hasfile('filename')) {

                foreach ($request->file('filename') as $image) {

                    $fileName = uniqid() . $image->getClientOriginalName();
                    $fileName = uniqid() . $image->getClientOriginalName();

                    $destination_path = public_path('/thumbnail');
                    //dd($test);
                    $risize_image = Image::make($image->getRealPath());
                    $risize_image->resize(300, 300, function ($constration){
                        $constration->aspectRatio();
                    })->save($destination_path .'/' . $fileName);

                    $destination_path = public_path('/images');
                    $image->move($destination_path, $fileName);
                    $img = Image::make(public_path('/images/' . $fileName))->resize(600, 600);
                    $img->save();
                    $data[] = $fileName;
                    //dd($img);

                    //$test = $image->move(public_path('/images/'), $fileName);
                    //dd($test);
                    //$img = Image::make(public_path('/images/' . $fileName))->resize(300, 200);
                    //dd($img);

                    //$img->save();

                }
                $arr = implode(',', $data);
               // dd($arr);
                $property->update([
                    'foto' => $arr,
                ]);


            }

        }

        return redirect('/pronat')->with('status', 'Shpallja u postua, ju lutem prisni per aporvim!');
    }


}


