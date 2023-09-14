@extends('layouts.induk')

@push('js-custom')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('themes/sbadmin') }}/js/datatables-simple-demo.js"></script>
@endpush

@section('css-tambahan')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
@endsection

@section('main-content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Senarai Pengguna</h1>
    </div>
</main>
<div class="container-fluid px-4">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Senarai Pengguna
        </div>
        <div class="card-body">

            @include('layouts.alerts')

            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($senaraiPengguna as $pengguna)
                    <tr>
                        <td>{{ $pengguna->name }}</td>
                        <td>{{ $pengguna->email }}</td>
                        <td>{{ $pengguna->status }}</td>
                        <td>
                            <a href="{{ route('users.show', $pengguna->id) }}" class="btn btn-success">Rekod Peralatan</a>
                            <a href="{{ route('users.edit', $pengguna->id) }}" class="btn btn-primary">Edit</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $pengguna->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <form method="POST" action="{{ route('users.destroy', $pengguna->id) }}">
                            @csrf
                            @method('DELETE')

                            <div class="modal fade" id="modal-delete-{{ $pengguna->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pengesahan Hapus</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    Adakah anda bersetuju untuk menghapuskan data ini?

                                    <ol>
                                        <li>{{ $pengguna->name }}</li>
                                    </ol>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Ya!</button>
                                    </div>
                                </div>
                                </div>
                            </div>

                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
