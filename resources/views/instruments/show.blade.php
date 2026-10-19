@extends('layouts.app')

@section('title', $instrument->name)

@section('content')
<div class="container py-4">

    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('instruments.index') }}" class="link-light">Katalog</a></li>
            <li class="breadcrumb-item">
                <a href="{{ route('instruments.index', ['type' => $instrument->type]) }}" class="link-light">{{ $instrument->type }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ $instrument->name }}</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body p-4">
            <div class="row g-5">

                {{-- Gambar --}}
                <div class="col-6">
                    <div class="ratio ratio-4x3 rounded overflow-hidden border">
                        <img src="{{ $instrument->image_url }}" alt="{{ $instrument->name }}" class="object-fit-cover">
                    </div>
                </div>

                {{-- Informasi --}}
                <div class="col-6 d-flex flex-column">
                    <div class="mb-2">
                        <span class="badge text-bg-light fs-6">{{ $instrument->type }}</span>
                        <span class="badge text-bg-secondary fs-6">{{ $instrument->brand }}</span>
                    </div>

                    <h1 class="h2 fw-bold">{{ $instrument->name }}</h1>
                    <p class="display-6 fw-bold text-light my-3">{{ $instrument->formatted_price }}</p>

                    <p class="text-body-secondary">{{ $instrument->description }}</p>

                    <table class="table table-sm table-borderless w-auto mb-4">
                        <tbody>
                            <tr><th class="pe-4 fw-semibold">Merek</th><td>{{ $instrument->brand }}</td></tr>
                            <tr><th class="pe-4 fw-semibold">Kategori</th><td>{{ $instrument->type }}</td></tr>
                            <tr><th class="pe-4 fw-semibold">Kondisi</th><td>Baru, bergaransi</td></tr>
                            <tr><th class="pe-4 fw-semibold">Kode produk</th><td>NP-{{ str_pad($instrument->id, 4, '0', STR_PAD_LEFT) }}</td></tr>
                        </tbody>
                    </table>

                    <div class="d-flex gap-2 mt-auto">
                        <a class="btn btn-success btn-lg flex-fill" target="_blank" rel="noopener"
                           href="https://wa.me/6287736914429?text={{ rawurlencode('Halo Harmoniq, saya mau beli ' . $instrument->name . ' (NP-' . str_pad($instrument->id, 4, '0', STR_PAD_LEFT) . '). Apakah stoknya tersedia?') }}">
                            <i class="bi bi-whatsapp me-1"></i>Beli via WhatsApp
                        </a>
                        <a href="{{ route('how-to-buy') }}" class="btn btn-outline-light btn-lg">Cara Pembelian</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Produk terkait --}}
    @if($related->isNotEmpty())
        <h2 class="h4 fw-bold mt-5 mb-3">Produk {{ $instrument->type }} lainnya</h2>
        <div class="row row-cols-4 g-4">
            @foreach($related as $item)
                <div class="col">
                    <div class="card h-100">
                        <div class="ratio ratio-4x3">
                            <img src="{{ $item->image_url }}" alt="{{ $item->name }}" class="card-img-top object-fit-cover" loading="lazy">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="h6 fw-semibold">{{ $item->name }}</h3>
                            <p class="fw-bold text-light mt-auto mb-3">{{ $item->formatted_price }}</p>
                            <a href="{{ route('instruments.show', $item) }}" class="btn btn-outline-light btn-sm w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

</div>
@endsection