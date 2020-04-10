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

        return view('Shpalljet.index', compact('pronat'));
    }

    public function search(Request $request)
    {
        //dd($request);
        //   $request->validate([
        //     'lloji' => 'required',
        //    'komuna' => 'string',
        ///   'qmimi' => 'integer',
        // 'kati' => 'integer|max:2',
        // 'hapsira' =>'string'
        //]);


        //   "komuna" => null
        // "qmimi" => null
        // "kati" => null
        //"hapsira

        if ($request->komuna == null and $request->qmimi == null and $request->kati == null and $request->hapsira == null) {
            $search = Property::where('llojishpalljes', '=', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->get();

            return view('Shpalljet.index', compact('search'));

        } elseif ($request->komuna != null and $request->qmimi == null and $request->kati == null and $request->hapsira == null) {
            // dd($request);
            $search = Property::where('llojishpalljes', '=', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', 'LIKE', $request->komuna)
                ->get();
            //dd($search);
            return view('Shpalljet.index', compact('search'));
        } elseif ($request->komuna != null and $request->qmimi != null and $request->kati == null and $request->hapsira == null) {
            // dd($request);
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', 'LIKE', $request->komuna)
                ->where('qmimi', '>=', $request->qmimi)
                ->get();
            return view('Shpalljet.index', compact('search'));
        } elseif ($request->komuna != null and $request->qmimi != null and $request->kati != null and $request->hapsira == null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', 'LIKE', $request->komuna)
                ->where('qmimi', '>=', $request->qmimi)
                ->where('kati', '=', $request->kati)
                ->get();

            return view('Shpalljet.index', compact('search'));
        } elseif ($request->komuna != null and $request->qmimi != null and $request->kati != null and $request->hapsira != null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', 'LIKE', $request->komuna)
                ->where('qmimi', '<=', $request->qmimi)
                ->where('kati', '=', $request->kati)
                ->where('siperfaqja', '>=', $request->hapsira)
                ->get();
            return view('Shpalljet.index', compact('search'));
        } elseif ($request->komuna == null and $request->qmimi != null and $request->kati == null and $request->hapsira == null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('qmimi', '<=', $request->qmimi)
                ->get();
            return view('Shpalljet.index', compact('search'));
        } elseif ($request->komuna == null and $request->qmimi == null and $request->kati != null and $request->hapsira == null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('kati', '=', $request->kati)
                ->get();

            return view('Shpalljet.index', compact('search'));


        }elseif ($request->komuna == null and $request->qmimi == null and $request->kati == null and $request->hapsira != null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('siperfaqja', '<=', $request->hapsira)
                ->get();

            return view('Shpalljet.index', compact('search'));

        }
    }

}
