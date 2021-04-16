<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;

use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;

class ProdukController extends Controller
{
    public function index(){



        $produk = Produk::All();

        return view('mitra.produk.index',compact('produk'));
    }

    public function create()
    {
        $kategori = Kategori::orderBy('nama_kategori', 'DESC')->get();
        return view('mitra.produk.tambah',compact('kategori'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [

			'nama_pupuk' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi_obat' => 'required',
            'stok' => 'required',
			'keunggulan' => 'required',
			'komposisi' => 'required',
			'penggunaan' => 'required',
			'kategori_id' => 'required',
			'harga' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$gambar = $request->file('gambar');

		$nama_file = time()."_".$gambar->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'gambar_pupuk';
		$gambar->move($tujuan_upload,$nama_file);

		Produk::create([

			'nama_pupuk' => $request->nama_pupuk,
            'gambar' => $nama_file,
			'deskripsi_obat' => $request->deskripsi_obat,
            'stok' => $request->stok,
			'keunggulan' => $request->keunggulan,
			'komposisi' => $request->komposisi,
			'penggunaan' => $request->penggunaan,
			'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,

        ]);
        alert()->success('Data Pupuk telah ditambahkan', 'Sukses');
        return redirect('/mitra/produk');

    }

    public function edit($id){

        $produk = Produk::where('id', $id)->first();
        $kategori = Kategori::All();

        return view('mitra.produk.edit', compact('kategori' ,'produk'));
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'nama_pupuk' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi_obat' => 'required',
            'stok' => 'numeric|required',
			'keunggulan' => 'required',
			'komposisi' => 'required',
			'penggunaan' => 'required',
			'kategori_id' => 'required',
			'harga' => 'numeric|required',
        ]);

        $produk = Produk::find($id);
        $produk->nama_pupuk = $request->nama_pupuk;
        if($request->file('gambar') == "")
        {
                $produk->gambar=$produk->gambar;

            }
            else
            {

            $filename = time(). '.png'; '.jpg'; '.jpeg';
            $request->file('gambar')->move("../public/gambar_pupuk", $filename);
            $produk->gambar = $filename;
        }
        $produk->deskripsi_obat = $request->deskripsi_obat;
        $produk->stok = $request->stok;

        $produk->keunggulan = $request->keunggulan;
        $produk->komposisi = $request->komposisi;
        $produk->penggunaan = $request->penggunaan;
        $produk->kategori_id = $request->kategori_id;
        $produk->harga = $request->harga;
        $produk->save();
        alert()->success('Data Pupuk telah diupdate', 'Sukses Di Update');

        return redirect('/mitra/produk');
    }

    public function delete($id)
    {
            $produk = Produk::find($id);
            $produk->delete();
            alert()->error('Data Pupuk telah dihapus', 'Delete');
            return redirect('/mitra/produk');
    }
}
