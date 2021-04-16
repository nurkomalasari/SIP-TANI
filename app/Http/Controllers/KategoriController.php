<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {

        $kategori= Kategori::All();
        return view('Mitra.kategori.index',compact('kategori'));
    }

    public function create()
    {
        return view('mitra.kategori.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama_kategori' =>array('required','regex:/(^([a-zA-Z\s]+)(\d+)?$)/u')

    	]);

        Kategori::create([
    		'nama_kategori' => $request->nama_kategori,

    	]);
        alert()->success('Kategori Pupuk Telah ditambahkan', 'Sukses');

    	return redirect('mitra/kategori');
    }

    public function edit(Kategori $kategori, $id)
    {
        $kategori = Kategori::find($id);
         return view('mitra.kategori.edit', ['kategori' => $kategori]);
    }

    public function update(Request $request, Kategori $kategori , $id)
    {
        $this->validate($request,[
            'nama_kategori' => array('required','regex:/(^([a-zA-Z\s]+)(\d+)?$)/u')

         ]);

         $kategori = Kategori::find($id);
         $kategori->nama_kategori = $request->nama_kategori;
         $kategori->save();
         alert()->success('Kategori Pupuk telah diupdate', 'Sukses Di Update');

         return redirect('mitra/kategori');
    }

    public function destroy(Kategori $kategori , $id)
    {
        $kategori = Kategori::find($id);
            $kategori->delete();
            alert()->error('Kategori Pupuk telah dihapus', 'Delete');

            return redirect('mitra/kategori');
    }
}
