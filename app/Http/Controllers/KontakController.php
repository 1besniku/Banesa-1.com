<?php

namespace App\Http\Controllers;

use App\message;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    //

    public function index(){
        return view('kontakti.index');
    }
    public function store(Request $request)
    {
        //  dd($request);
        $request->validate([
            'emri' => 'required|min:3|max:11',
            'mbiemri' => 'required|min:2',
            'emaili' => 'required|email',
            'phone' => 'required|min:9',
            'mesazhi' => 'required',
        ]);


        $message = message::create([
            'emri' => $request->emri,
            'mbiemri' => $request->mbiemri,
            'email' => $request->emaili,
            'phone' => $request->phone,
            'mesazhi' => $request->mesazhi
        ]);

        return redirect('/contact')->with('status', 'Mesazhi u dergua!');
    }
    public function show(){

        $message = message::latest()->paginate(10);

        return view('kontakti.show',compact('message'));
    }
}
