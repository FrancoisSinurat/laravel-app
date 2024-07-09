<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'jenis' => 'required',
            'harga' => 'required'
        ]);

        Barang::create([
            'nama' => $request->input('nama'),
            'kategori' => $request->input('kategori'),
            'jenis' => $request->input('jenis'),
            'harga' => $request->input('harga')
        ]);
        return redirect('barang/')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }
    public function hapus($id)
    {
        // Hapus file dari storage
        // DB::table('barangs')->where('id', $id)->delete();
        // Hapus record dari database
        $barangs = Barang::findorFail($id)->where('id', $id)->delete(); //untuk mengambil 1 data saja

        return redirect()->back()->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $barangs = Barang::findOrFail($id)->get();
        // $barangs = DB::table('barangs')->where('id', $id)->get();
        // $barangs= Barang::find($id); //untuk mengambil 1 data saja
        return view('barang/edit', ['barangs' => $barangs]);
    }
    public function update(Request $request, Barang $barangs)
    {
        // Barang::findorFail($id);
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'jenis' => 'required',
            'harga' => 'required'
        ]);
        $barangs = Barang::findorFail($request->id);
        // dd($request->all());
        $barangs -> update([
                'nama' => $request->input('nama'),
                'kategori' => $request->input('kategori'),
                'jenis' => $request->input('jenis'),
                'harga' => $request->input('harga')
            ]);

        return redirect('barang/')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
