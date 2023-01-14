<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class admin extends Controller
{
      // admin
      public function admin()
      {
          return view('regislogin.loginadmin');
      }
      public function dologin(Request $request) {
        // validasi
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();

            if (auth()->user()->role_id === 1) {
                // jika user superadmin
                return redirect()->intended('/stskeuangan');
            }   elseif (auth()->user()->role_id === 2) {
                    return redirect('/datasiswa');
            }   else {
                    return redirect('/kepsek');
            }
        }
  
          return back()->with('loginerror', 'Gagal Masuk');
      }
}
