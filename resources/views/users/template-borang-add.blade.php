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

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="mb-3">
                <label class="form-label">Password Confirmation</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="">-- Sila Pilih Status</option>
                    <option value="active">Active</option>
                    <option value="pending">Pending</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </div>
    </div>

    </form>

</div>

@endsection
