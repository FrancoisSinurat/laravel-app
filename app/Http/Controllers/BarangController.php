<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use function Laravel\Prompts\confirm;

class BarangController extends Controller
{

    //menampilkan data
    public function index()
    {
        // mengambil data dari table barangs
        $barangs = Barang::all();
        // Mengirim data ke view barang dan menampilkan data melalui method compact
        return view('barang/index', compact('barangs'));
    }
    public function add(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
            'jenis' => 'required',
            'harga' => 'required',  
            // 'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
       

        Barang::create([
            'nama' => $request->nama,
            'kategori_id' => $request->kategori_id,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            // 'image' => $request->image,
        ]);
        Alert::success('Data Berhasil Ditambahkan');
        return redirect('barang/');
        
    }
    
    public function hapus($id)
    {
        $barangs = Barang::findorFail($id)->where('id', $id)->delete(); //untuk mengambil 1 data saja
        alert()->success( 'Data Berhasil Dihapus');

        return redirect()->back();
    }
    public function edit($id)
    {
        $barangs = Barang::findOrFail($id)->where('id', $id)->get();
        $kategoris = Kategori::all();
        return view('barang/edit', ['barangs' => $barangs],['kategoris' => $kategoris]);
    }
    public function update(Request $request, Barang $barangs)
    {
        // Barang::findorFail($id);
        $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
            'jenis' => 'required',
            'harga' => 'required'
        ]);
        $barangs = Barang::findorFail($request->id);
        // dd($request->all());
        $barangs->update([
            'nama' => $request->input('nama'),
            'kategori_id' => $request->input('kategori_id'),
            'jenis' => $request->input('jenis'),
            'harga' => $request->input('harga')
        ]);
        
        Alert::success('Data Berhasil Disimpan');
        return redirect('barang/')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
