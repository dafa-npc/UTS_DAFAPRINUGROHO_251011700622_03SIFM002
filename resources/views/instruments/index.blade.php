@extends('layouts.app')

@section('title', 'Katalog Alat Musik')

@section('content')

    @php($keep = array_filter(request()->only('q', 'brand'), 'filled'))

    <div class="container py-5">

        <div class="mb-4">
            <h1 class="fw-bold mb-1">Katalog Alat Musik</h1>
            <p class="text-body-secondary mb-0">Cari berdasarkan nama, lalu saring menurut tipe atau merek.</p>
        </div>

        {{-- Search + filter --}}
        <div class="card mb-4">
            <div class="card-body">
                <form method="GET" action="{{ route('instruments.index') }}" class="row g-2 align-items-center">
                    @if(filled($filters['type'] ?? null))
                        <input type="hidden" name="type" value="{{ $filters['type'] }}">
                    @endif

                    <div class="col-6">
                        <div class="input-group">
                            <span class="input-group-text bg-body-tertiary"><i class="bi bi-search"></i></span>
                            <input type="search" name="q" class="form-control"
                                   placeholder="Cari nama alat musik, misalnya Yamaha atau Stratocaster"
                                   value="{{ $filters['q'] ?? '' }}" maxlength="100">
                        </div>
                    </div>

                    <div class="col-3">
                        <select name="brand" class="form-select" aria-label="Filter merek">
                            <option value="">Semua merek</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand }}" @selected(($filters['brand'] ?? null) === $brand)>{{ $brand }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-3 d-flex gap-2">
                        <button type="submit" class="btn btn-light flex-fill">Terapkan</button>
                        @if(filled($filters['q'] ?? null) || filled($filters['type'] ?? null) || filled($filters['brand'] ?? null))
                            <a href="{{ route('instruments.index') }}" class="btn btn-outline-secondary">Reset</a>
                        @endif
                    </div>
                </form>

                {{-- Filter tipe: deretan tombol (mempertahankan q & brand) --}}
                <div class="d-flex flex-wrap gap-2 mt-3">
                    <a href="{{ route('instruments.index', $keep) }}"
                       class="btn btn-sm rounded-pill {{ blank($filters['type'] ?? null) ? 'btn-light' : 'btn-outline-light' }}">
                        Semua tipe
                    </a>
                    @foreach($types as $type)
                        <a href="{{ route('instruments.index', array_merge($keep, ['type' => $type])) }}"
                           class="btn btn-sm rounded-pill {{ ($filters['type'] ?? null) === $type ? 'btn-light' : 'btn-outline-light' }}">
                            {{ $type }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Ringkasan hasil --}}
        <p class="text-body-secondary mb-3">
            @if($instruments->total() > 0)
                Menampilkan {{ $instruments->firstItem() }} sampai {{ $instruments->lastItem() }} dari {{ $instruments->total() }} produk
            @else
                0 produk ditemukan
            @endif
        </p>

        {{-- Grid produk: 4 kolom x 2 baris = 8 per halaman --}}
        <div class="row row-cols-4 g-4">
            @forelse($instruments as $item)
                <div class="col">
                    <div class="card h-100">
                        <div class="ratio ratio-4x3">
                            <img src="{{ $item->image_url }}" alt="{{ $item->name }}"
                                 class="card-img-top object-fit-cover" loading="lazy">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex gap-1 mb-2">
                                <span class="badge text-bg-light">{{ $item->type }}</span>
                                <span class="badge text-bg-secondary">{{ $item->brand }}</span>
                            </div>
                            <h2 class="h6 fw-semibold">{{ $item->name }}</h2>
                            <p class="fs-5 fw-bold text-light mt-auto mb-3">{{ $item->formatted_price }}</p>
                            <a href="{{ route('instruments.show', $item) }}" class="btn btn-light w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-light border text-center py-5 mb-0">
                        <i class="bi bi-emoji-frown fs-1 d-block mb-2"></i>
                        <p class="fw-semibold mb-1">Tidak ada produk yang cocok dengan pencarianmu.</p>
                        <p class="text-body-secondary mb-3">Coba kata kunci lain atau hapus filter tipe dan merek.</p>
                        <a href="{{ route('instruments.index') }}" class="btn btn-light">Tampilkan semua produk</a>
                    </div>
                </div>
            @endforelse
        </div>

        {{-- Pagination: view bawaan Laravel versi Bootstrap 5 (dipanggil langsung dari sini) --}}
        <div class="d-flex justify-content-center mt-5">
            {{ $instruments->links('pagination::bootstrap-5') }}
        </div>
    </div>

@endsection