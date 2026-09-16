@extends('layouts.app')

@section('title', 'Tambah Jenis')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/user-form.css') }}">
@endpush

@section('content')
    <div class="container py-4">
        <div class="card form-card shadow-sm border-0">
            {{-- Header Card --}}
            <div class="card-header bg-primary text-white p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="fw-bold mb-1">Tambah Jenis</h3>
                        <p class="mb-0 text-white-50">Isi formulir di bawah ini untuk menambahkan jenis baru.</p>
                    </div>
                    <a href="{{ route('jenis.index') }}" class="btn btn-light text-primary fw-bold px-3">
                        &larr; Kembali
                    </a>
                </div>
            </div>

            <div class="card-body p-4">
                <form action="{{ route('jenis.store') }}" method="POST">
                    @csrf

                    
                    <div class="mb-4">
                        <label for="nama" class="form-label fw-semibold">Nama Jenis <span class="text-danger">*</span></label>
                        <input 
                            type="text" 
                            name="nama" 
                            id="nama" 
                            class="form-control @error('nama') is-invalid @enderror" 
                            value="{{ old('nama') }}" 
                            placeholder="Masukkan nama jenis..."
                            required
                        >
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('jenis.index') }}" class="btn btn-secondary px-4">Batal</a>
                        <button type="submit" class="btn btn-primary px-4 fw-bold">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection