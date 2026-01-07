@extends('layouts.main')

@section('isi-konten')

    <link rel="stylesheet" href="{{ asset('css/foto.css') }}">

    <header class="py-5 text-center container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="fw-bold display-4">Galeri Foto</h1>
                <p class="text-muted lead fs-6">Hasil foto yang dipotret oleh kami.</p>
            </div>
        </div>
    </header>

    <div class="container mb-5">
        <div class="row g-4">
            {{-- Loop semua foto dari database --}}
            @forelse($fotos as $foto)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card gallery-card h-100 shadow-sm">
                        {{-- Gambar bisa diklik untuk melihat full --}}
                        <div class="ratio ratio-4x3" style="cursor: pointer;" data-bs-toggle="modal"
                            data-bs-target="#fotoModal{{ $foto->id_foto }}">
                            <img src="{{ asset($foto->gambar) }}" class="card-img-top" alt="{{ $foto->nama_foto }}"
                                onerror="this.src='https://via.placeholder.com/800x600?text=Foto+Tidak+Ditemukan'"
                                style="object-fit: cover; transition: transform 0.3s;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fs-6 fw-bold mb-2">{{ $foto->nama_foto }}</h5>
                            <p class="card-text text-muted small mb-1">
                                <i class="fas fa-map-marker-alt me-1"></i>{{ $foto->lokasi }}
                            </p>
                            <p class="card-text mb-0">
                                <small class="text-muted">
                                    <i class="fas fa-calendar me-1"></i>{{ $foto->created_at->format('d M Y') }}
                                </small>
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Modal untuk melihat foto full size --}}
                <div class="modal fade" id="fotoModal{{ $foto->id_foto }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content bg-transparent border-0">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-3 text-center">
                                <img src="{{ asset($foto->gambar) }}" class="img-fluid rounded" alt="{{ $foto->nama_foto }}"
                                    style="max-height: 75vh; width: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                {{-- Tampilkan pesan jika belum ada foto --}}
                <div class="col-12">
                    <div class="alert alert-info text-center py-5" role="alert">
                        <i class="fas fa-image fa-3x mb-3 d-block"></i>
                        <h5>Belum Ada Foto</h5>
                        <p class="mb-0">Galeri masih kosong. Foto akan ditampilkan setelah admin mengupload.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection