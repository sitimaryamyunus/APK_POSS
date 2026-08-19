@extends('layouts.app') <!-- Sesuaikan dengan nama layouting utama Anda -->

@section('title', 'Tambah Pengguna')

@section('content')
<h4>Tambah Pengguna</h4>

<form action="{{ route('admin.users.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="name" 
               class="form-control @error('name') is-invalid @enderror" 
               value="{{ old('name') }}" required>
        @error('name')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" 
               class="form-control @error('email') is-invalid @enderror" 
               value="{{ old('email') }}" required>
        @error('email')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" 
               class="form-control @error('password') is-invalid @enderror" required>
        @error('password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label>Role / Peran</label>
        <select name="role" class="form-control @error('role') is-invalid @enderror" required>
            <option value="">-- Pilih Role --</option>
            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="kasir" {{ old('role') == 'kasir' ? 'selected' : '' }}>Kasir</option>
        </select>
        @error('role')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-success mt-2" type="submit">Simpan Pengguna</button>
    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary mt-2">Kembali</a>
</form>
@endsection
