@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')

@include('layouts.navbar')

<div class="container produk-form-wrap py-4">
    <div class="produk-form-section">
        <div class="produk-form-header">
            <h1>Edit Produk</h1>
            <a href="{{ route('produk.index') }}" class="btn-kembali">&larr; Kembali</a>
        </div>

        <form action="{{ route('produk.update', $produk) }}"
              method="POST"
              enctype="multipart/form-data">
            @method('PUT')

            @include('produk._form')
        </form>
    </div>
</div>

@endsection