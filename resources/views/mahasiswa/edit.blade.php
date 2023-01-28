@extends('layouts.master')

@section('title', 'Edit Mahasiswa')

@section('content')
<!-- Title-->
<div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
    <h2 class="h3 py-2 me-2 w-100 text-sm-center">Update Data Mahasiswa</h2>
</div>

<form action="{{route('mahasiswas.update', ['mahasiswa'=>$mahasiswa->id])}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3 pb-2">
        <label class="form-label" for="nama">Nama Lengkap</label>
        <input name="nama" class="form-control @error('nama') is-invalid @enderror" type="text" id="nama"
            value="{{old('nama')?? $mahasiswa->nama}}" placeholder="ex:Vidya Cantik">
        <div class="form-text">Masukkan nama lengkap dengan benar.</div>
        @error('nama')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3 pb-2">
        <label class="form-label" for="nim">Nomor Induk Mahasiswa</label>
        <input name="nim" class="form-control @error('nim') is-invalid @enderror" type="text" id="nim"
            value="{{old('nim')?? $mahasiswa->nim}}" placeholder="ex:1905551xxx">
        <div class="form-text">Masukkan NIM dengan benar.</div>
        @error('nim')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3 pb-2">
        <label class="form-label" for="no_hp">No HP</label>
        <input name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" type="text" id="no_hp"
            value="{{old('no_hp')?? $mahasiswa->no_hp}}" placeholder="ex:081234567890">
        <div class="form-text">Masukkan nomor HP dengan benar.</div>
        @error('no_hp')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-edit-alt fs-lg me-2"></i>Edit Data</button>
</form>
@endsection
