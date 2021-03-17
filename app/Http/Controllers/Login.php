<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Konsumen;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class Login extends Controller
{
    function masuk(Request $request){


          // Attempt to log the user in
      // Passwordnya pake bcrypt
      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
        return redirect()->intended('/admin');
    }else if (Auth::guard('mitra')->attempt(['email' => $request->email, 'password' => $request->password])) {

        return redirect()->intended('/mitra');
    }else if (Auth::guard('konsumen')->attempt(['email' => $request->email, 'password' => $request->password])) {

        return redirect()->intended('/konsumen');
    }else{
        //Gagal Login
        return redirect('/masuk')->with('alert','Password atau Email, Salah !');
    }

    }

    function keluar(){
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
          } elseif (Auth::guard('mitra')->check()) {
            Auth::guard('mitra')->logout();
          } elseif (Auth::guard('konsumen')->check()) {
            Auth::guard('konsumen')->logout();
          }

          return redirect('/masuk');
    }
}


