@extends('layouts.master')

@section('title', 'Data Kelas Mahasiswa')

@section('content')
<!-- Title-->
<div class="bg-secondary rounded-3 d-sm-flex flex-wrap justify-content-between align-items-center p-4 mb-4">
    <h2 class="h3 py-2 text-center text-sm-start mb-0">Pendataan Kelas Mahasiswa</h2>

    <div class="text-center text-sm-end">
        <a class="btn btn-sm btn-primary" href="{{route('kelas-mahasiswa.create')}}"><i
                class="ci-add-user fs-lg me-2"></i>
            Tambah Data
        </a>
    </div>
</div>
<div class="table-responsive fs-md mb-4">
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kelas</th>
                <th>Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelasMahasiswa as $klsMhs)
            <tr>
                <td class="py-3 align-middle">{{$loop->iteration}}</td>
                <td class="py-3 align-middle">{{$klsMhs->kelas->kelas_matkul}}</td>
                <td class="py-3 align-middle">{{$klsMhs->mahasiswa->nama}}</td>
                <td class="py-3 align-middle">
                    <a class="nav-link-style me-2" href="{{ route('kelas-mahasiswa.edit', $klsMhs->id)}}"
                        data-bs-toggle="tooltip" title="Edit">
                        <i class="ci-edit"></i>
                    </a>
                    <a class="nav-link-style text-danger delete" data-id="{{ $klsMhs->id }}" href="#"
                        data-bs-toggle="tooltip" title="Remove">
                        <div class="ci-trash"></div>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<form id="form-delete-kelas-mahasiswa" action="" method="post">
    @csrf
    @method('delete')
</form>
@endsection

@section('delete-scripts')
<script>
    var formDelete = $('#form-delete-kelas-mahasiswa');
    var iconDelete = $('.delete');

    iconDelete.on('click', function() {
        var idKlsMhs = $(this).data('id');

        var url = '{{ route("kelas-mahasiswa.destroy", ["kelas_mahasiswa" => ":id"]) }}';
        url = url.replace(':id', idKlsMhs);

        formDelete.attr("action", url);
        formDelete.submit();
    });
</script>
@endsection
