@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <h1 class="fw-bold mb-1">Tentang Kami</h1>
        <p class="text-body-secondary mb-0">Toko alat musik yang dijalankan oleh orang-orang yang memang bermain musik.</p>
    </div>

    <div class="row g-4">
        <div class="col-7">
            <div class="card h-100">
                <div class="card-body p-4">
                    <h2 class="h4 fw-bold mb-3">Cerita Harmoniq</h2>
                    <p class="text-body-secondary">
                        Harmoniq bermula dari sebuah studio latihan kecil di Jakarta. Banyak pemain pemula yang datang bingung memilih alat: gitar mana yang nyaman, keyboard mana yang cukup untuk belajar, drum mana yang sesuai ruangan.
                    </p>
                    <p class="text-body-secondary">
                        Dari situ kami mulai menjual alat musik dengan satu prinsip: rekomendasikan yang cocok untuk kebutuhan dan budget pembeli, bukan yang paling mahal. Setiap unit kami cek dan setel sendiri sebelum dikirim.
                    </p>
                    <p class="text-body-secondary mb-0">
                        Hari ini kami melayani pelajar, guru musik, kafe, sampai band panggung dari berbagai kota.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-5">
            <div class="card h-100">
                <div class="card-body p-4">
                    <h2 class="h4 fw-bold mb-3">Yang kami tawarkan</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent px-0"><i class="bi bi-patch-check text-light me-2"></i>Produk baru dengan garansi resmi</li>
                        <li class="list-group-item bg-transparent px-0"><i class="bi bi-chat-dots text-light me-2"></i>Konsultasi memilih alat secara gratis</li>
                        <li class="list-group-item bg-transparent px-0"><i class="bi bi-sliders text-light me-2"></i>Pengecekan dan tuning sebelum kirim</li>
                        <li class="list-group-item bg-transparent px-0"><i class="bi bi-truck text-light me-2"></i>Pengiriman aman ke seluruh Indonesia</li>
                        <li class="list-group-item bg-transparent px-0"><i class="bi bi-tools text-light me-2"></i>Servis dan penggantian senar atau stik</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection