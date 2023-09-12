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
        <h1 class="mt-4">Senarai Peralatan</h1>
    </div>
</main>
<div class="container-fluid px-4">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Senarai Peralatan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nama Peralatan</th>
                        <th>Submission ID</th>
                        <th>Nama Pembekal</th>
                        <th>Nama Jenama</th>
                        <th>Tarikh Pendaftaran</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama Peralatan</th>
                        <th>Submission ID</th>
                        <th>Nama Pembekal</th>
                        <th>Nama Jenama</th>
                        <th>Tarikh Pendaftaran</th>
                        <th>Tindakan</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($senaraiPeralatan as $peralatan)
                    <tr>
                        <td>{{ $peralatan['nama_peralatan'] }}</td>
                        <td>{{ $peralatan['submission_id'] }}</td>
                        <td>{{ $peralatan['nama_pembekal'] }}</td>
                        <td>{{ $peralatan['nama_jenama'] }}</td>
                        <td>{{ $peralatan['tarikh_pendaftaran'] }}</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
