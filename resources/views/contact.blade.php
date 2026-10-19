@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <h1 class="fw-bold mb-1">Kontak</h1>
        <p class="text-body-secondary mb-0">Tanya stok, minta rekomendasi, atau datang langsung ke toko.</p>
    </div>

    <div class="row row-cols-2 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-body p-4">
                    <h2 class="h5 fw-bold"><i class="bi bi-whatsapp text-success me-2"></i>WhatsApp</h2>
                    <p class="text-body-secondary">Cara tercepat untuk cek stok dan memesan. Balasan biasanya dalam hitungan menit di jam operasional.</p>
                    <a href="https://wa.me/6287736914429" target="_blank" rel="noopener" class="btn btn-success">Chat Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <div class="card-body p-4">
                    <h2 class="h5 fw-bold"><i class="bi bi-envelope text-light me-2"></i>Email</h2>
                    <p class="text-body-secondary">Untuk pemesanan dalam jumlah besar, kerja sama, atau permintaan penawaran.</p>
                    <a href="mailto:halo@nadaprima.example" class="btn btn-outline-light">testing@dafa.example</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <div class="card-body p-4">
                    <h2 class="h5 fw-bold"><i class="bi bi-geo-alt text-light me-2"></i>Alamat toko</h2>
                    <p class="mb-1">Harmoniq, Toko Alat Musik</p>
                    <p class="text-body-secondary mb-0">Blok M, Jakarta</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <div class="card-body p-4">
                    <h2 class="h5 fw-bold"><i class="bi bi-clock text-light me-2"></i>Jam operasional</h2>
                    <table class="table table-sm table-borderless mb-0">
                        <tbody>
                            <tr><td>Senin sampai Jumat</td><td class="text-end">09.00 sampai 18.00 WIB</td></tr>
                            <tr><td>Sabtu</td><td class="text-end">09.00 sampai 15.00 WIB</td></tr>
                            <tr><td>Minggu dan hari libur</td><td class="text-end">Tutup</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection