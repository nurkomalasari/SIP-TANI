<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;

class DKonsumenController extends Controller
{
    public function konsumen(){


        return view('konsumen.konsumen');
    }
    public function index(){

        $konsumen = Konsumen::All();
        return view('mitra.konsumen.index',compact('konsumen'));
    }

    public function create()
    {
        return view('mitra.konsumen.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama' => 'required',
    		'email' => 'required',
    		'noKtp' => 'required',
    		'alamat' => 'required',
    		'noHp' => 'required'

    	]);
        Konsumen::create([
    		'nama' => $request->nama,
    		'email' => $request->email,
    		'noKtp' => $request->noKtp,
    		'alamat' => $request->alamat,
    		'noHp' => $request->noHp

    	]);
        alert()->success('Data Konsumen telah ditambahkan', 'Sukses');

        return redirect('/pelanggan');

    }

    public function edit($id){
        $konsumen = Konsumen::find($id);
        return view('mitra.konsumen.edit', ['konsumen' => $konsumen]);
    }

    public function update(Request $request, Konsumen $konsumen , $id)
    {
        $this->validate($request,[
            'nama' => 'required',
    		'email' => 'required',
    		'password' => 'required',
    		'noKtp' => 'required',
    		'alamat' => 'required',
    		'noHp' => 'required'

         ]);

         $konsumen = Konsumen::find($id);
         $konsumen->nama = $request->nama;
         $konsumen->email = $request->email;
         $konsumen->password = $request->password;
         $konsumen->noKtp = $request->noKtp;
         $konsumen->alamat = $request->alamat;
         $konsumen->noHp = $request->noHp;

         $konsumen->save();
        alert()->success('Data Konsumen telah diedit', 'Sukses');

         return redirect('/pelanggan');
    }
    public function destroy(Konsumen $konsumen , $id)
    {
        $konsumen = Konsumen::find($id);
            $konsumen->delete();
        alert()->error('Data Konsumen telah diedit', 'Delete');

            return redirect('/pelanggan');
    }



}
