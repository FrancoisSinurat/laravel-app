@extends('layouts.main')


@section('container')
<h2>Edit Barang</h2>
@if(count($errors) > 0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{ $error }} <br/>
    @endforeach
</div>
@endif
@foreach ($barangs as $barang)
<form action="{{ url('barang/update') }}" onsubmit="return confirm('Apakah anda yakin sudah menggantinya ?');" method="POST" >
    {{ csrf_field() }}
    <input type="hidden" class="form-control" name="id" value="{{ $barang->id }}">
    <div class="form-group col-5">
        <label for="nama" class="mb-2 mt-2">Nama Barang <span style="color: red">*</span></label>
        <input type="text" class="form-control" name="nama" value="{{ $barang->nama }}">
        <span style="color:red" >@error('nama'){{ $message }}@enderror</span>
    </div>
    <div class="form-group">
        <label for="kategori" class="mb-2 mt-2">Kategori <span style="color: red">*</span></label>
        
        <select class="form-control " name="kategori_id" id="kategori">
            @foreach ($kategoris as $k)
            <option hidden>Pilih Kategori</option>
            <option value="{{ $k->id }}">{{ $k->id }}. <span>{{ $k->nama }}</span></option>
            @endforeach
        </select>
</div>
    <div class="form-group">
        <label for="jenis" class="mb-2 mt-2">Jenis Barang <span style="color: red">*</span></label>
        <input type="text" class="form-control" name="jenis" value="{{ $barang->jenis }}">
        <span style="color:red" >@error('jenis'){{ $message }}@enderror</span>
    </div>
    <div class="form-group">
        <label for="harga" class="mb-2 mt-2">Harga Barang <span style="color: red">*</span></label>
        <input type="number" class="form-control" name="harga" value="{{ $barang->harga }}">
        <span style="color:red" >@error('harga'){{ $message }}@enderror</span>
    </div>
    <div class="form-group">
        <button class="btn btn-primary mt-3" type="submit">Simpan</button>
      </div>
    
    </form>
    @endforeach
@endsection