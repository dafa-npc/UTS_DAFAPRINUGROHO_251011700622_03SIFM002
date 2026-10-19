@extends('layouts.app')

@section('title', 'Cara Pembelian')

@section('content')
<div class="container py-5">

    <div class="mb-5">
        <h1 class="fw-bold">Cara Pembelian</h1>
        <p class="lead text-body-secondary mb-0">Belanja alat musik di Harmoniq cukup lima langkah. Tidak perlu membuat akun.</p>
    </div>

    @php
        $steps = [
            ['bi-search',        'Pilih produk',            'Telusuri katalog, gunakan pencarian dan filter tipe atau merek, lalu buka halaman detail produk yang kamu inginkan.'],
            ['bi-whatsapp',      'Cek stok lewat WhatsApp', 'Klik tombol "Beli via WhatsApp" di halaman detail. Pesan berisi nama dan kode produk akan terisi otomatis, tinggal kirim.'],
            ['bi-receipt',       'Terima rincian pesanan',  'Admin membalas dengan konfirmasi stok, total harga, dan ongkos kirim sesuai alamatmu. Kamu bisa bertanya atau meminta foto atau video unit asli.'],
            ['bi-credit-card',   'Lakukan pembayaran',      'Transfer ke rekening BCA atau Mandiri atas nama PT Harmoniq Sejahtera, lalu kirim bukti transfer. Pesanan diproses setelah pembayaran terverifikasi.'],
            ['bi-box-seam',      'Terima barangmu',         'Teknisi kami melakukan pengecekan dan tuning, lalu mengemas dengan bubble wrap dan kardus tebal. Nomor resi dikirim di hari yang sama.'],
        ];
    @endphp

    <div class="row g-4">
        <div class="col-8">
            @foreach($steps as $i => [$icon, $title, $text])
                <div class="card mb-3">
                    <div class="card-body d-flex align-items-start gap-4 p-4">
                        <span class="badge text-bg-light rounded-pill fs-4 px-3 py-2">{{ $i + 1 }}</span>
                        <div>
                            <h2 class="h5 fw-bold"><i class="bi {{ $icon }} me-2 text-body-secondary"></i>{{ $title }}</h2>
                            <p class="mb-0 text-body-secondary">{{ $text }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-4">
            <div class="card bg-light text-dark mb-4">
                <div class="card-body p-4">
                    <h2 class="h5 fw-bold">Butuh bantuan?</h2>
                    <p class="text-secondary">Admin kami siap membantu memilih instrumen yang cocok dengan budget dan level kemampuanmu.</p>
                    <a href="https://wa.me/6287736914429" target="_blank" rel="noopener"
                       class="btn btn-dark w-100 fw-semibold">
                        <i class="bi bi-whatsapp me-1"></i>Chat Admin
                    </a>
                </div>
            </div>

            <div class="accordion" id="faq">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Apakah produk bergaransi?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faq">
                        <div class="accordion-body text-body-secondary">Semua produk baru bergaransi resmi distributor selama 12 bulan, kecuali disebutkan lain di halaman produk.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Bagaimana jika barang rusak saat dikirim?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body text-body-secondary">Rekam video saat membuka paket dan laporkan dalam 2 x 24 jam. Kami akan menukar atau mengganti unit tanpa biaya tambahan.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Bisa ambil langsung di toko?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body text-body-secondary">Bisa. Konfirmasi dulu lewat WhatsApp agar unit disiapkan, lalu ambil di toko pada jam operasional.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('instruments.index') }}" class="btn btn-light btn-lg">Mulai Belanja</a>
    </div>
</div>
@endsection