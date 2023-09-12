<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function borangLogin() {
        return view('auth.login');
    }

    function checkLogin(Request $request) {

        // Proses Validasi Borang
        $request->validate([
            'email' => 'required|email:filter', // Cara 1 sediakan rule
            'password' => ['required', 'min:3'] // Cara 2 sediakan rule
        ]);

        return $request->all();

    }
}
