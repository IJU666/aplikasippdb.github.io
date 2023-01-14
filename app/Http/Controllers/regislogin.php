<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pengguna;
use App\Http\Requests\StoreUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class regislogin extends Controller
{
    public function regist()
    {
        return view('regislogin.regist');
    }
    
    public function create(StoreUser $request)
    {
        $validated = $request->validated();
        if($validated){
        // $validateData = $request->validate([
        //     'email' => 'required|email:dns|unique:pengguna',
        //     'password' => 'required|min:5|max:255',
        // ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validated['password'] = Hash::make($validated['password']);

        pengguna::create($validated);
        // $request->session()->flash('succes', 'Data Telah Di kirim');
        return redirect('/masuk')->with('succes', 'Data Telah Di kirim');
        }
    }

    public function login()
    {
        return view('regislogin.login');
    }

    public function gas(Request $asup)
    {
    //    $data = $asup->validate([
    //         'email' => 'required|email:dns',
    //         'password' => 'required'
    //     ]);

        if(Auth::guard('pengguna')->attempt(['email' => $asup->email, 'password' => $asup->password])) {
            $asup->session()->regenerate();

            return redirect('/Privatecs');
        }
        return back()->with('loginerror', 'Gagal Masuk');
    }

    // logout
    public function keluar()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }


}
