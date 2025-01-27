<!-- resources/views/barang/index.blade.php -->
@extends('layouts.main')

@section('container')
<h2>Daftar Barang</h2>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<button class="btn btn-warning mb-2 mt-2" ><a href="/barang/add" style="text-decoration:none; color:black">Tambah Data</a></button>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->kategori }}</td>
                    <td>{{ $barang->jenis }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>
                    
                            <a href="/barang/{{ $barang->barang_id }}">Edit</a>
                            |
                            <a href="/barang/{{ $barang->barang_id }}">Hapus</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
