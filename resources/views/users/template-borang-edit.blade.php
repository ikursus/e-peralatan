@extends('layouts.induk')

@section('main-content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Kemaskini User - {{ $pengguna->name }}</h1>
    </div>
</main>


<div class="container">

    <form method="POST" action="{{ route('users.update', $pengguna->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        @method('PATCH')

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
