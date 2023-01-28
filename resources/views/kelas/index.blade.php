@extends('layouts.master')

@section('title', 'List Kelas')

@section('content')
<!-- Title-->
<div class="bg-secondary rounded-3 d-sm-flex flex-wrap justify-content-between align-items-center p-4 mb-4">
    <h2 class="h3 py-2 text-center text-sm-start mb-0">List Kelas Mata Kuliah</h2>

    <div class="text-center text-sm-end">
        <a class="btn btn-sm btn-primary" href="{{route('kelas.create')}}"><i class="ci-add-user fs-lg me-2"></i>
            Tambah Kelas Mata Kuliah
        </a>
    </div>
</div>
<div class="table-responsive fs-md mb-4">
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kelas Mata Kuliah</th>
                <th>SKS</th>
                <th>Nama Dosen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $kls)
            <tr>
                <td class="py-3 align-middle">{{$loop->iteration}}</td>
                <td class="py-3 align-middle">{{$kls->kelas_matkul}}</td>
                <td class="py-3 align-middle">{{$kls->sks}}</td>
                <td class="py-3 align-middle">{{$kls->nama_dosen}}</td>
                <td class="py-3 align-middle">
                    <a class="nav-link-style me-2" href="{{ route('kelas.edit', $kls->id)}}" data-bs-toggle="tooltip"
                        title="Edit">
                        <i class="ci-edit"></i>
                    </a>
                    <a class="nav-link-style text-danger delete" data-id="{{ $kls->id }}" href="#"
                        data-bs-toggle="tooltip" title="Remove">
                        <div class="ci-trash"></div>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<form id="form-delete-kelas" action="" method="post">
    @csrf
    @method('delete')
</form>
@endsection

@section('delete-scripts')
<script>
    var formDelete = $('#form-delete-kelas');
    var iconDelete = $('.delete');

    iconDelete.on('click', function() {
        var idKls = $(this).data('id');

        var url = '{{ route("kelas.destroy", ["kelas" => ":id"]) }}';
        url = url.replace(':id', idKls);

        formDelete.attr("action", url);
        formDelete.submit();
    });
</script>
@endsection
