<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Konsumen;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use UxWeb\SweetAlert\SweetAlert;



class Login extends Controller
{
    function masuk(Request $request){


          // Attempt to log the user in
      // Passwordnya pake bcrypt
      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
        alert()->success('Login Sebagai Mitra', 'Berhasil');
        return redirect()->intended('/admin');
    }else if (Auth::guard('mitra')->attempt(['email' => $request->email, 'password' => $request->password])) {
        alert()->success('Login Sebagai Pemilik Toko', 'Berhasil');
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
        alert()->success('Anda Telah Logout', 'Berhasil');
          return redirect('/');
    }
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama' => 'required',
    		'email' => 'required',
    		'password' => 'required',
    		'noKtp' => 'required',
    		'alamat' => 'required',
    		'noHp' => 'required'

    	]);
        Konsumen::create([
    		'nama' => $request->nama,
    		'email' => $request->email,
            'password' => Hash::make($request->password),
    		'noKtp' => $request->noKtp,
    		'alamat' => $request->alamat,
    		'noHp' => $request->noHp

    	]);
        alert()->success('Registrasi Konsumen telah berhasil', 'Berhasil');

        return redirect('/masuk');

    }

}


