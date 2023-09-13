<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{ old('name') ?? (isset($pengguna) ? $pengguna->name : NULL) }}">
</div>

<div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value="{{ old('email') ?? (isset($pengguna) ? $pengguna->email : NULL) }}">
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
        <option value="active" {{ (isset($pengguna) ? $pengguna->status : old('status')) == 'active' ? 'selected="selected"' : NULL }}>Active</option>
        <option value="pending" {{ (isset($pengguna) ? $pengguna->status : old('status')) == 'pending' ? 'selected="selected"' : NULL }}>Pending</option>
    </select>
</div>
