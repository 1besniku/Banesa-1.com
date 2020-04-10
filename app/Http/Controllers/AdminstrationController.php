<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminstrationController extends Controller
{
    //
    public function index()
    {
        $useradmin = User::where('is_admin', '=', '1')->get();
        $user = User::where('is_admin', '=', '0')->get();

        return view('Admin.index', compact('useradmin', 'user'));

    }

    public function adduser()
    {
        return view('Admin.addUser');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('Admin.edit', compact('user'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
                'name' => 'required|min:2',
                'email' => 'required|email',
                'password' => 'required|min:6|',
                'confirmpassword' => 'required_with:password|same:password|min:6'

            ]
        );

        $user = User::create([
            'name' => $request->name,
            'is_admin' => 1,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/Administration');
    }

    public function update(Request $request, User $user, $id)
    {
        //dd($request);
        $data = $request->validate([
            'name' => 'sometimes|required|min:3',
            'email' => 'required|email',
            'password' => 'nullable|min:6|',
            'confirmpassword' => 'nullable|required_with:password|same:password|min:6',
        ]);

        $user = User::find($id);
        //$user->update($request->all())
        if ($request->password == null) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'number_sms' => $request->number_sms,
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'number_sms' => $request->number_sms,
                'password' => Hash::make($request->password),
            ]);
        }


        return redirect('/Administration');
    }

    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect('/Administration');
    }

    public function search(Request $request)
    {
       // dd($request);
        $request->validate([
            'search' => 'required|string',
        ]);


        $kerko = User::where('name' ,'LIKE', '%'.$request->search.'%')->get();


        return view('Search.index',compact('kerko'));
    }
}
