@extends('layouts.master')

@section('title', 'List Mahasiswa')

@section('content')
<!-- Title-->
<div class="bg-secondary rounded-3 d-sm-flex flex-wrap justify-content-between align-items-center p-4 mb-4">
    <h2 class="h3 py-2 text-center text-sm-start mb-0">List Mahasiswa</h2>

    <div class="text-center text-sm-end">
        <a class="btn btn-sm btn-primary" href="{{route('mahasiswas.create')}}"><i class="ci-add-user fs-lg me-2"></i>
            Tambah Mahasiswa
        </a>
    </div>
</div>
<div class="table-responsive fs-md mb-4">
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>No HP</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswas as $mahasiswa)
            <tr>
                <td class="py-3 align-middle">{{$loop->iteration}}</td>
                <td class="py-3 align-middle">{{$mahasiswa->nim}}</td>
                <td class="py-3 align-middle">{{$mahasiswa->nama}}</td>
                <td class="py-3 align-middle">{{$mahasiswa->no_hp}}</td>
                <td class="py-3 align-middle">
                    <a class="nav-link-style me-2" href="{{ route('mahasiswas.edit', $mahasiswa->id)}}"
                        data-bs-toggle="tooltip" title="Edit">
                        <i class="ci-edit"></i>
                    </a>
                    <a class="nav-link-style text-danger delete" data-id="{{ $mahasiswa->id }}" href="#"
                        data-bs-toggle="tooltip" title="Remove">
                        <div class="ci-trash"></div>
                    </a>
                </td>
            </tr>
            @empty
            <td class="py-3 text-center text-muted" colspan="5">Data Empty</td>
            @endforelse
        </tbody>
    </table>
</div>
<form id="form-delete-mahasiswa" action="" method="post">
    @csrf
    @method('delete')
</form>
@endsection

@section('delete-scripts')
<script>
    var formDelete = $('#form-delete-mahasiswa');
    var iconDelete = $('.delete');

    iconDelete.on('click', function() {
        var idMhs = $(this).data('id');

        var url = '{{ route("mahasiswas.destroy", ["mahasiswa" => ":id"]) }}';
        url = url.replace(':id', idMhs);

        formDelete.attr("action", url);
        formDelete.submit();
    });
</script>
@endsection
