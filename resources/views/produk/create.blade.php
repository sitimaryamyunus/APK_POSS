@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')

@include('layouts.navbar')

<div class="container produk-form-wrap py-4">
    <div class="produk-form-section">
        <div class="produk-form-header">
            <h1>Tambah Produk</h1>
            <a href="{{ route('produk.index') }}" class="btn-kembali">&larr; Kembali</a>
        </div>

        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
            @include('produk._form')
        </form>
    </div>
</div>

@endsection