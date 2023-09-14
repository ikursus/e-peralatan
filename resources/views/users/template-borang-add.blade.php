@extends('layouts.induk')

@section('main-content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tambah User</h1>
    </div>
</main>


<div class="container">

    <form method="POST" action="{{ route('users.store') }}">
        @csrf

    <div class="card">
        <div class="card-body">

            @include('layouts.alerts')

            @include('users.borang-umum')

            <button type="submit" class="btn btn-primary">Save</button>

        </div>
    </div>

    </form>

</div>

@endsection
