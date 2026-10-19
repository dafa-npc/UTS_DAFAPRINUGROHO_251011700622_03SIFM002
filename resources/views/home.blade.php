@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container py-5">

    <div class="card mb-4">
        <div class="card-body p-5">
            <h1 class="fw-bold mb-3">Selamat datang di Harmoniq</h1>
            <p class="lead text-body-secondary w-75 mb-4">
                Toko alat musik untuk pemula sampai musisi panggung. Semua unit baru, bergaransi, dan dicek oleh teknisi kami sebelum dikirim.
            </p>
            <a href="{{ route('instruments.index') }}" class="btn btn-light btn-lg me-2">Lihat Katalog</a>
            <a href="{{ route('how-to-buy') }}" class="btn btn-outline-light btn-lg">Cara Pembelian</a>
        </div>
    </div>

    <div class="row row-cols-3 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-body p-4">
                    <i class="bi bi-patch-check fs-1 text-light"></i>
                    <h2 class="h5 fw-bold mt-2">Garansi resmi</h2>
                    <p class="text-body-secondary mb-0">Produk baru bergaransi distributor, jadi kamu tenang kalau ada masalah.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body p-4">
                    <i class="bi bi-sliders fs-1 text-light"></i>
                    <h2 class="h5 fw-bold mt-2">Dicek dan di-tuning</h2>
                    <p class="text-body-secondary mb-0">Setiap alat dicek dan disetel teknisi kami, siap dimainkan begitu tiba.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body p-4">
                    <i class="bi bi-truck fs-1 text-light"></i>
                    <h2 class="h5 fw-bold mt-2">Kirim ke seluruh Indonesia</h2>
                    <p class="text-body-secondary mb-0">Dikemas aman dengan bubble wrap dan kardus tebal, nomor resi dikirim di hari yang sama.</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection