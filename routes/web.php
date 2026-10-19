<?php

use App\Http\Controllers\InstrumentController;
use Illuminate\Support\Facades\Route;

// Halaman statis
Route::view('/', 'home')->name('home');
Route::view('/cara-pembelian', 'how-to-buy')->name('how-to-buy');
Route::view('/tentang-kami', 'about')->name('about');
Route::view('/kontak', 'contact')->name('contact');

// Katalog + detail produk
Route::get('/katalog', [InstrumentController::class, 'index'])->name('instruments.index');
Route::get('/katalog/{instrument}', [InstrumentController::class, 'show'])
    ->whereNumber('instrument')
    ->name('instruments.show');