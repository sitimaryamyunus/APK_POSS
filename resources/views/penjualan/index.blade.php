@extends('layouts.app')

@section('title', 'Penjualan')

@section('content')

@include('layouts.navbar')

<style>
    /* Latar Belakang Gradasi Feminin Estetik */
    body {
        background: linear-gradient(135deg, #fce7f3 0%, #fae8ff 50%, #f3e8ff 100%) !important;
        min-height: 100vh;
    }

    /* Judul Utama */
    .container.py-4 h1 {
        font-size: 1.5rem;
        font-weight: 800;
        color: #9d174d;
        margin-bottom: 1.25rem;
        text-align: left;
        letter-spacing: -0.5px;
    }

    /* Alert Notifikasi Estetik */
    .alert {
        border-radius: 1rem;
        border: none;
        font-weight: 600;
        font-size: 0.9rem;
    }
    .alert-success {
        background-color: #f0fdf4;
        color: #166534;
        border: 1px solid #bbf7d0;
    }
    .alert-danger {
        background-color: #fef2f2;
        color: #991b1b;
        border: 1px solid #fecdd3;
    }

    /* Formulir Pencarian Modern */
    .search-box-custom {
        border-radius: 1rem;
        border: 1px solid #fbcfe8;
        padding: 0.65rem 1.1rem;
        background: rgba(255, 255, 255, 0.8);
        color: #4c0519;
        font-weight: 500;
        transition: all 0.25s ease;
    }

    .search-box-custom:focus {
        border-color: #ec4899;
        box-shadow: 0 0 0 4px rgba(236, 72, 153, 0.15);
        background: #fff;
    }

    .search-box-custom::placeholder {
        color: #f472b6;
        opacity: 0.6;
    }

    .btn-cari-custom {
        background-color: rgba(255, 255, 255, 0.6);
        border: 1px solid #fbcfe8;
        border-left: none;
        color: #be185d;
        font-weight: 600;
        padding: 0 1.25rem;
        border-radius: 0 1rem 1rem 0 !important;
        transition: all 0.2s;
    }

    .btn-cari-custom:hover {
        background-color: #fdf2f8;
        color: #9d174d;
        border-color: #fbcfe8;
    }

    /* Tabel Estetik Pastel Soft Pink */
    .table {
        background: rgba(255, 255, 255, 0.45);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border-radius: 1.5rem;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.5);
        box-shadow: 0 10px 30px rgba(219, 39, 119, 0.04);
    }

    .table thead tr {
        background: rgba(251, 207, 232, 0.55) !important;
    }

    .table thead th {
        border: none;
        font-weight: 700;
        color: #9d174d !important;
        padding: 0.9rem 0.75rem;
    }

    .table tbody tr {
        border-bottom: 1px solid rgba(251, 207, 232, 0.25);
        background: transparent;
        transition: background-color 0.2s;
    }

    .table tbody tr:hover {
        background-color: rgba(255, 255, 255, 0.6) !important;
    }

    .table tbody td,
    .table tbody th {
        padding: 0.85rem 0.75rem;
        color: #4c0519;
        font-weight: 500;
        vertical-align: middle;
        border: none;
    }

    /* Badge Status Transaksi */
    .status-badge {
        display: inline-block;
        padding: 0.35rem 0.75rem;
        border-radius: 0.5rem;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.5px;
    }
    .status-completed {
        background-color: #e0f2fe;
        color: #0369a1;
        border: 1px solid #bae6fd;
    }
    .status-open {
        background-color: #fef3c7;
        color: #b45309;
        border: 1px solid #fde68a;
    }

    /* Desain Tombol Tambah/Create */
    .btn-buat {
        background: linear-gradient(135deg, #f472b6 0%, #ec4899 100%);
        border: none;
        border-radius: 1rem;
        padding: 0.65rem 1.5rem;
        font-weight: 700;
        color: #fff;
        box-shadow: 0 6px 15px rgba(236, 72, 153, 0.25);
        transition: all 0.25s ease;
    }

    .btn-buat:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(236, 72, 153, 0.35);
        color: #fff;
    }

    /* Tombol Aksi Kustom */
    .btn-detail {
        background-color: rgba(255, 255, 255, 0.7);
        border: 1px solid #fbcfe8;
        color: #be185d;
        font-weight: 600;
        border-radius: 0.65rem;
        padding: 0.35rem 0.85rem;
        transition: all 0.2s;
    }

    .btn-detail:hover {
        background-color: #be185d;
        border-color: #be185d;
        color: #fff;
    }

    .btn-edit-akun {
        background-color: rgba(251, 207, 232, 0.6);
        border: 1px solid #fbcfe8;
        color: #be185d;
        font-weight: 600;
        border-radius: 0.65rem;
        padding: 0.35rem 0.85rem;
        transition: all 0.2s;
    }

    .btn-edit-akun:hover {
        background-color: #ec4899;
        border-color: #ec4899;
        color: #fff;
    }

    .btn-hapus {
        background-color: rgba(254, 228, 226, 0.7);
        border: 1px solid #fecdd3;
        color: #e11d48;
        font-weight: 600;
        border-radius: 0.65rem;
        padding: 0.35rem 0.85rem;
        transition: all 0.2s;
    }

    .btn-hapus:hover {
        background-color: #e11d48;
        border-color: #e11d48;
        color: #fff;
    }

    /* Pagination */
    .pagination .page-link {
        color: #db2777;
        background-color: rgba(255, 255, 255, 0.5);
        border: 1px solid #fbcfe8;
        border-radius: 0.5rem;
        margin: 0 2px;
        font-weight: 600;
    }

    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #f472b6 0%, #ec4899 100%);
        border-color: #ec4899;
        color: #fff;
    }

    .pagination .page-link:hover {
        background-color: #fdf2f8;
        color: #be185d;
        border-color: #fbcfe8;
    }

    .pagination-wrapper p {
        display: none !important;
    }

    .pagination-wrapper div:first-child {
        display: none !important;
    }
</style>

<div class="container py-4">

@if(session('errors'))
    <div class="alert alert-danger mb-3">
        {{ session('errors') }}
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success mb-3">
        {{ session('success') }}
    </div>
@endif

<h1 class="mb-3">Halaman Penjualan</h1>
<a href="{{ route('penjualan.create') }}" class="btn btn-buat mb-4">Tambah Transaksi Baru</a>

<form action="{{ route('penjualan.index') }}" method="GET" class="mb-4">
    <div class="input-group" style="max-width: 400px;">
        <input
        type="text"
        name="search"
        value="{{ request()->search }}"
        class="form-control search-box-custom"
        placeholder="Cari data penjualan..."
        style="border-radius: 1rem 0 0 1rem;"
        >
        <button class="btn btn-cari-custom" type="submit">
            Cari 
        </button>
    </div>
</form>

<table class="table align-middle text-center">
    <thead>
        <tr>
            <th scope="col" style="width: 60px;">No</th>
            <th scope="col">Tanggal Transaksi</th>
            <th scope="col" class="text-start">Kasir</th>
            <th scope="col">Total Pembayaran</th>
            <th scope="col">Metode Pembayaran</th>
            <th scope="col" style="width: 140px;">Status</th>
            <th scope="col" style="width: 220px;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($sales as $sale)
        <tr>
            <th scope="row">{{$sales->firstItem() + $loop->index}}</th>
            <td style="font-weight: 600;">{{$sale->created_at->translatedFormat('d-m-Y H:i:s')}}</td>
            <td class="text-start">{{$sale->user->name}}</td>
            <td style="font-weight: 700; color: #be185d;">Rp {{number_format($sale->total_pembayaran)}}</td>
            <td>
                <span class="badge text-bg-light border px-2 py-1" style="border-radius: 0.5rem; font-weight: 600;">
                    {{$sale->metode_pembayaran}}
                </span>
            </td>
            <td>
                <span class="status-badge {{ strtolower($sale->status) == 'completed' ? 'status-completed' : 'status-open' }}">
                    {{$sale->status}}
                </span>
            </td>
            <td>
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <a href="" class="btn btn-detail btn-sm">Detail</a>
                    
                    @can('view', $sale)
                        <a href="{{ route('penjualan.edit', $sale) }}" class="btn btn-edit-akun btn-sm">Edit</a>
                    @endcan
                    
                    @can('delete', $sale)
                    <form action="{{ route('penjualan.destroy', $sale) }}" method="POST" class="d-inline m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-hapus btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus penjualan ini?')">
                            Hapus
                        </button>
                    </form>
                    @endcan
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center py-5 text-muted">
                <h5 class="m-0" style="font-style: italic;">Data Tidak Ditemukan</h5>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-end mt-4 pagination-wrapper">
    {{$sales->links()}}
</div>
</div>

@endsection
