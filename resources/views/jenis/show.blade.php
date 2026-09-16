@extends('layouts.app')

@section('title', 'Detail Jenis')

@section('content')

@include('layouts.navbar')

<div class="container my-4">
    <div class="card border-0 shadow-sm rounded-4 p-3">

        <div class="card-body bg-primary text-white rounded-4 p-4 mb-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div>
                <h3 class="fw-bold mb-1">Detail Jenis</h3>
                <p class="mb-0 text-white-50 small">Rincian informasi jenis produk.</p>
            </div>
            <a href="{{ route('jenis.index') }}" class="btn btn-light text-primary fw-bold px-3 py-2 rounded-3 shadow-sm">
                &larr; Kembali
            </a>
        </div>

        <div class="px-2">
            <table class="table table-borderless">
                <tr>
                    <th width="30%">Nama Jenis</th>
                    <td>{{ $jenis->nama_jenis }}</td>
                </tr>
                <tr>
                    <th>Dibuat Oleh</th>
                    <td>{{ $jenis->user->name ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Tanggal Dibuat</th>
                    <td>{{ $jenis->created_at->translatedFormat('d F Y H:i') }}</td>
                </tr>
            </table>
        </div>

    </div>
</div>

@endsection
