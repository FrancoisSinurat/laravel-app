@extends('layouts.main')


@section('container')
<h2>Tambah Barang</h2>

<form action="/barang/add" onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST" >
    @csrf
    
    <div class="form-group">
        <label for="nama" class="mb-2 mt-2">Nama Barang <span style="color: red">*</span></label>
        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Barang">
    </div>
    <div class="form-group">
            <label for="kategori" class="mb-2 mt-2">Kategori <span style="color: red">*</span></label>
            
            <select class="form-control " name="kategori_id" id="kategori">
                @foreach ($kategoris as $kategori)
                <option hidden>Pilih Kategori</option>
                <option value="{{ $kategori->id }}"><span>{{ $kategori->nama }}</span></option>
                @endforeach
            </select>
    <div class="form-group">
        <label for="jenis" class="mb-2 mt-2">Jenis Barang <span style="color: red">*</span></label>
        <input type="text" class="form-control" name="jenis" placeholder="Masukkan Jenis Barang">
    </div>
    <div class="form-group">
        <label for="harga" class="mb-2 mt-2">Harga Barang<span style="color: red">*</span></label>
        <input type="number" class="form-control" name="harga" id="rupiah" placeholder="Masukkan Harga Barang">
        {{-- onkeydown="cobaharga()" --}}
    </div>
    <div class="form-group">
        <button class="btn btn-primary mt-3" type="submit">Submit form</button>
      </div>
    
    </form>
@endsection
