@extends('layouts.master')

@section('title', 'Edit Kelas')

@section('content')
<!-- Title-->
<div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
    <h2 class="h3 py-2 me-2 w-100 text-sm-center">Update Kelas Mahasiswa</h2>
</div>

<form action="{{route('kelas.update', ['kelas'=>$kelas->id])}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3 pb-2">
        <label class="form-label" for="kelas_matkul">Kelas Mata Kuliah</label>
        <input name="kelas_matkul" class="form-control @error('kelas_matkul') is-invalid @enderror" type="text"
            id="kelas_matkul" value="{{old('kelas_matkul')?? $kelas->kelas_matkul}}"
            placeholder="ex:Pemrograman Internet A">
        <div class="form-text">Masukkan Kelas Mata Kuliah dengan benar.</div>
        @error('kelas_matkul')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3 pb-2">
        <label class="form-label" for="sks">SKS</label>
        <input name="sks" class="form-control @error('sks') is-invalid @enderror" type="text" id="sks"
            value="{{old('sks')?? $kelas->sks}}" placeholder="ex:2">
        <div class="form-text">Masukkan SKS dengan benar.</div>
        @error('sks')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3 pb-2">
        <label class="form-label" for="nama_dosen">Nama Dosen</label>
        <input name="nama_dosen" class="form-control @error('nama_dosen') is-invalid @enderror" type="text"
            id="nama_dosen" value="{{old('nama_dosen')?? $kelas->nama_dosen}}" placeholder="ex:Cikgu Melati">
        <div class="form-text">Masukkan nama dosen dari kelas yang dimasukkan.</div>
        @error('nama_dosen')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-edit-alt fs-lg me-2"></i>Edit Data</button>
</form>
@endsection
