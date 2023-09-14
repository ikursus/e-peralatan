@extends('layouts.induk')

@section('main-content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tambah Peralatan</h1>
    </div>
</main>


<div class="container">

    <form method="POST" action="{{ route('peralatan.store') }}">
        @csrf

    <div class="card">
        <div class="card-body">

            @include('layouts.alerts')

            <div class="mb-3">
                <label class="form-label">Nama Peralatan</label>
                <input type="text" class="form-control" name="nama_peralatan">
            </div>

            <div class="mb-3">
                <label class="form-label">Submission ID</label>
                <input type="text" class="form-control" name="submission_id">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Pembekal</label>
                <input type="text" class="form-control" name="nama_pembekal">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Jenama</label>
                <input type="text" class="form-control" name="nama_jenama">
            </div>

            <div class="mb-3">
                <label class="form-label">Tarikh Pendaftaran</label>
                <input type="date" class="form-control" name="tarikh_pendaftaran">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="">-- Sila Pilih Status</option>
                    <option value="available">Available</option>
                    <option value="out_of_stock">Out of Stock</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </div>
    </div>

    </form>

</div>

@endsection
