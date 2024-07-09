@extends('layouts.main')


@section('container')
<h2>Edit Barang</h2>

@foreach ($barangs as $barang)
<form action="{{ url('barang/update') }}" onsubmit="return confirm('Apakah anda yakin sudah menggantinya ?');" method="POST" >
    {{ csrf_field() }}
    <input type="hidden" class="form-control" name="id" value="{{ $barang->id }}">
    <div class="form-group">
        <label for="nama" class="mb-2 mt-2">Nama Barang</label>
        <input type="text" class="form-control" name="nama" value="{{ $barang->nama }}">
        <span style="color:red" >@error('nama'){{ $message }}@enderror</span>
    </div>
    <div class="form-group">
        <label for="kategori" class="mb-2 mt-2">Kategori</label>
        <input type="text" class="form-control" name="kategori" value="{{ $barang->kategori }}">
        <span style="color:red" >@error('kategori'){{ $message }}@enderror</span>
    </div>
    <div class="form-group">
        <label for="jenis" class="mb-2 mt-2">Jenis Barang</label>
        <input type="text" class="form-control" name="jenis" value="{{ $barang->jenis }}">
        <span style="color:red" >@error('jenis'){{ $message }}@enderror</span>
    </div>
    <div class="form-group">
        <label for="harga" class="mb-2 mt-2">Harga Barang</label>
        <input type="number" class="form-control" name="harga" value="{{ $barang->harga }}">
        <span style="color:red" >@error('harga'){{ $message }}@enderror</span>
    </div>
    <div class="form-group">
        <button class="btn btn-primary mt-3" type="submit">Simpan</button>
      </div>
    
    </form>
    @endforeach
@endsection