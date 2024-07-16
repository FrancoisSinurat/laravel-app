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
                <th>Nama</th>
                <th><a href="/kategori">Kategori</a></th>
                <th><a href="/jenis">Jenis</a></th>
                <th>Harga</th>
                <th>Opsi</th>
                {{-- <th>Gambar</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
            <tr>
                <td>{{ $barang->nama }}</td>
                <td>{{ $barang->kategori_id }}</td>
                <td>{{ $barang->jenis }}</td>
                <td>{{ $barang->harga }}</td>
                <td>
                    <button class="btn btn-dark"><a href="{{ route('barang.edit' ,$barang->id)  }}" style="text-decoration: none; color:azure">Edit</a></button>
                    |
                    <button class="btn btn-danger"><a href="{{ route('barang/hapus', $barang->id) }}" style="text-decoration: none; color:azure">Hapus</a></button>
                    
                </td>
                {{-- <td>{{ $barang->image }}</td> --}}
            </tr>
                    {{-- {{ number_format($barang->harga,0,',','') }} --}}
            @endforeach
        </tbody>
    </table>
@endsection

