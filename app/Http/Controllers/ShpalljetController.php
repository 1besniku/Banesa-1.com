<?php

namespace App\Http\Controllers;

use App\Property;

use Illuminate\Http\Request;
use App\User;

class ShpalljetController extends Controller
{
    //
    public function index()
    {

        $pronat = Property::all();

        return view('shpalljet.index', compact('pronat'));
    }

    public function search(Request $request)
    {
       //dd($request);
        $request->validate([
            'llojishpalljes' => 'required',
            'lloji' => 'required',
            'kati' => 'required',
            'komuna' => 'required',

        ]);


        //   "komuna" => null
        // "qmimi" => null
        // "kati" => null
        //"hapsira

        if ($request->komuna == '0' and $request->qmimi == null and $request->kati == '0' and $request->hapsira == null) {
            $search = Property::where('llojishpalljes', '=', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->get();
            //dd($search);
            return view('shpalljet.index', compact('search'));

        } elseif ($request->komuna != '0'and $request->qmimi == null and $request->kati == '0'and $request->hapsira == null) {
            // dd($request);
            $search = Property::where('llojishpalljes', '=', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', '=', $request->komuna)
                ->get();
            //dd($search);
            return view('shpalljet.index', compact('search'));
        } elseif ($request->komuna != '0' and $request->qmimi != null and $request->kati == '0' and $request->hapsira == null) {
            // dd($request);
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', '=', $request->komuna)
                ->where('qmimi', '>=', $request->qmimi)
                ->get();
            return view('shpalljet.index', compact('search'));
        } elseif ($request->komuna != '0' and $request->qmimi != null and $request->kati != '0' and $request->hapsira == null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', '=', $request->komuna)
                ->where('qmimi', '>=', $request->qmimi)
                ->where('kati', '=', $request->kati)
                ->get();

            return view('shpalljet.index', compact('search'));
        } elseif ($request->komuna != '0' and $request->qmimi != null and $request->kati != '0' and $request->hapsira != null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', '=', $request->komuna)
                ->where('qmimi', '<=', $request->qmimi)
                ->where('kati', '=', $request->kati)
                ->where('siperfaqja', '>=', $request->hapsira)
                ->get();
            return view('shpalljet.index', compact('search'));
        } elseif ($request->komuna == '0' and $request->qmimi != null and $request->kati == '0' and $request->hapsira == null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('qmimi', '<=', $request->qmimi)
                ->get();
            return view('shpalljet.index', compact('search'));
        } elseif ($request->komuna == '0' and $request->qmimi == null and $request->kati != '0' and $request->hapsira == null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('kati', '=', $request->kati)
                ->get();

            return view('shpalljet.index', compact('search'));


        } elseif ($request->komuna == '0' and $request->qmimi == null and $request->kati == '0' and $request->hapsira != null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('siperfaqja', '<=', $request->hapsira)
                ->get();

            return view('shpalljet.index', compact('search'));

        }
    }

}
