<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Jenis;
use App\Models\Barang;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = Jenis::all();
        // $jenis = DB::table('jenis')
        //             ->leftjoin('barangs', 'jenis.nama_jenis', '=', 'barangs.jenis')
        //             ->select('jenis.id','jenis.nama_jenis','barangs.id')
        //             ->get();
        return view('jenis.index',compact('jenis')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jenis $jenis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jenis)
    {
        //
    }
}
