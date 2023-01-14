<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedircetController extends Controller
{
    public function cek() {
        if (auth()->user()->role_id === 1) {
            return redirect('/stskeuangan');
        } elseif (auth()->user()->role_id === 2) {
            return redirect('/datasiswa');
        } else {
            return redirect('/kepsek');
        }
    }

    // public function cek1() {
    //     if (auth()->user()->email) {
    //         return redirect('/Privatecs');
    //     }
    // }
}