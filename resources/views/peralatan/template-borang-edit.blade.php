@extends('layouts.induk')

@section('main-content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Peralatan</h1>
    </div>
</main>


<div class="container">

    <form method="POST" action="{{ route('peralatan.update', $peralatan->id) }}">
        @csrf
        @method('PATCH')

    <div class="card">
        <div class="card-body">

            <div class="mb-3">
                <label class="form-label">Nama Peralatan</label>
                <input type="text" class="form-control" name="nama_peralatan" value="{{ $peralatan->nama_peralatan }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Submission ID</label>
                <input type="text" class="form-control" name="submission_id" value="{{ $peralatan->submission_id }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Pembekal</label>
                <input type="text" class="form-control" name="nama_pembekal" value="{{ $peralatan->nama_pembekal }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Jenama</label>
                <input type="text" class="form-control" name="nama_jenama" value="{{ $peralatan->nama_jenama }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Tarikh Pendaftaran</label>
                <input type="date" class="form-control" name="tarikh_pendaftaran" value="{{ $peralatan->tarikh_pendaftaran }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Pendaftar</label>
                <select name="user_id" class="form-control">
                    <option value="">-- Sila Pilih Pendaftar</option>
                    @foreach ($senaraiPendaftar as $pendaftar)
                    <option value="{{ $pendaftar->id }}" {{ $peralatan->user_id == $pendaftar->id ? 'selected="selected"' : NULL }}>{{ $pendaftar->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="">-- Sila Pilih Status</option>
                    <option value="available" {{ $peralatan->status == 'available' ? 'selected="selected"' : NULL }}>Available</option>
                    <option value="out_of_stock" {{ $peralatan->status == 'out_of_stock' ? 'selected="selected"' : NULL }}>Out of Stock</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </div>
    </div>

    </form>

</div>

@endsection
