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

        $pronat = Property::paginate(9);
        //dd($pronat);
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
                ->paginate(9);
            //dd($search);
            return view('shpalljet.index', compact('search'));

        } elseif ($request->komuna != '0'and $request->qmimi == null and $request->kati == '0'and $request->hapsira == null) {
            // dd($request);
            $search = Property::where('llojishpalljes', '=', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', '=', $request->komuna)
                ->paginate(9);
            //dd($search);
            return view('shpalljet.index', compact('search'));
        } elseif ($request->komuna != '0' and $request->qmimi != null and $request->kati == '0' and $request->hapsira == null) {
            // dd($request);
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', '=', $request->komuna)
                ->where('qmimi', '>=', $request->qmimi)
                ->paginate(9);
            return view('shpalljet.index', compact('search'));
        } elseif ($request->komuna != '0' and $request->qmimi != null and $request->kati != '0' and $request->hapsira == null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', '=', $request->komuna)
                ->where('qmimi', '>=', $request->qmimi)
                ->where('kati', '=', $request->kati)
                ->paginate(9);

            return view('shpalljet.index', compact('search'));
        } elseif ($request->komuna != '0' and $request->qmimi != null and $request->kati != '0' and $request->hapsira != null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('komuna', '=', $request->komuna)
                ->where('qmimi', '<=', $request->qmimi)
                ->where('kati', '=', $request->kati)
                ->where('siperfaqja', '>=', $request->hapsira)
                ->paginate(9);
            return view('shpalljet.index', compact('search'));
        } elseif ($request->komuna == '0' and $request->qmimi != null and $request->kati == '0' and $request->hapsira == null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('qmimi', '<=', $request->qmimi)
                ->paginate(9);
            return view('shpalljet.index', compact('search'));
        } elseif ($request->komuna == '0' and $request->qmimi == null and $request->kati != '0' and $request->hapsira == null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('kati', '=', $request->kati)
                ->paginate(9);

            return view('shpalljet.index', compact('search'));


        } elseif ($request->komuna == '0' and $request->qmimi == null and $request->kati == '0' and $request->hapsira != null) {
            $search = Property::where('llojishpalljes', 'Like', $request->llojishpalljes)
                ->where('lloji', '=', $request->lloji)
                ->where('siperfaqja', '<=', $request->hapsira)
                ->paginate(9);

            return view('shpalljet.index', compact('search'));

        }
    }
    public function shtepia(){
        $shtepia = Property::where('llojishpalljes','=','Shtepi')->where('aprovimi','=','1')->paginate(10);
            //dd($shtepia);
        return view('shpalljet.shtepia',compact('shtepia'));

    }
    public function banesa(){
        $banesa = Property::where('llojishpalljes','=','Banes')->where('aprovimi','=','1')->paginate(10);
       // dd($banesa);
        return view('shpalljet.banesa',compact('banesa'));
    }
    public function lokalet(){
        $lokali = Property::where('llojishpalljes','=','Lokal')->where('aprovimi','=','1')->paginate(10);
       // dd($lokali);
        return view('lokalet.index',compact('lokali'));
    }

}
