@extends('layouts.master')

@section('title', 'Edit Data')

@section('content')
<!-- Title-->
<div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
    <h2 class="h3 py-2 me-2 w-100 text-sm-center">Update Data Mahasiswa</h2>
</div>

<form action="{{route('kelas-mahasiswa.update', ['kelas_mahasiswa'=>$kelasMahasiswa->id])}}" method="POST">
    @csrf

    @method('PUT')
    <div class="mb-3 pb-2">
        <label class="form-label" for="kelas">Kelas</label>
        <select name="kelas" class="form-select me-2 @error('kelas') is-invalid @enderror" id="kelas">
            <option>Pilih Kelas</option>
            @foreach ($kelas as $kls)
            <option value="{{ $kls->id }}" @if($kls->id == $kelasMahasiswa->kelas_id) selected
                @endif>{{ $kls->kelas_matkul }}</option>
            @endforeach
        </select>

        @error('kelas')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3 pb-2">
        <label class="form-label" for="mahasiswa">Mahasiswa</label>
        <select name="mahasiswa" class="form-select me-2 @error('mahasiswa') is-invalid @enderror" id="mahasiswa">
            <option>Pilih Mahasiswa</option>
            @foreach ($mahasiswas as $mahasiswa)
            <option value="{{ $mahasiswa->id }}" @if($mahasiswa->id == $kelasMahasiswa->mahasiswa_id) selected
                @endif>{{ $mahasiswa->nama }}</option>
            @endforeach
        </select>

        @error('mahasiswa')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-edit-alt fs-lg me-2"></i>Edit Data</button>
</form>
@endsection
