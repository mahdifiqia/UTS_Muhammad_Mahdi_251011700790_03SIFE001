@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<div class="container py-4">
    <h1 class="section-title mb-4">Tentang</h1>

    <div class="row g-4">
        <div class="col-lg-6">
            <div class="side-box h-100">
                <h2 class="h5 fw-bold mb-3">Tentang toko</h2>
                <p class="text-secondary">
                    Toko Mainan Anak adalah katalog mainan untuk berbagai usia, mulai dari mainan edukatif,
                    kendaraan, boneka, sampai action figure. Setiap produk dilengkapi harga, kategori,
                    dan rekomendasi usia.
                </p>
                <p class="text-secondary mb-0">
                    Aplikasi ini adalah tampilan frontend yang dibuat dengan Laravel, Blade Template, dan Bootstrap.
                </p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="side-box h-100">
                <h2 class="h5 fw-bold mb-3">Identitas</h2>
                <dl class="row mb-0">
                    <dt class="col-sm-4 text-secondary fw-normal">Nama</dt>
                    <dd class="col-sm-8">Muhammad Mahdi Mahda Fiqia</dd>
                    <dt class="col-sm-4 text-secondary fw-normal">NIM</dt>
                    <dd class="col-sm-8">251011700790</dd>
                    <dt class="col-sm-4 text-secondary fw-normal">Program studi</dt>
                    <dd class="col-sm-8">Sistem Informasi, Universitas Pamulang</dd>
                    <dt class="col-sm-4 text-secondary fw-normal">Mata kuliah</dt>
                    <dd class="col-sm-8">Rekayasa Web (UTS)</dd>
                    <dt class="col-sm-4 text-secondary fw-normal">Dosen</dt>
                    <dd class="col-sm-8">Afif Efendi</dd>
                    <dt class="col-sm-4 text-secondary fw-normal">Tema</dt>
                    <dd class="col-sm-8 mb-0">Toko Mainan Anak</dd>
                </dl>
            </div>
        </div>

        <div class="col-12">
            <div class="side-box">
                <h2 class="h5 fw-bold mb-3">Teknologi yang dipakai</h2>
                <div class="d-flex flex-wrap gap-2">
                    <span class="age-pill">Laravel</span>
                    <span class="age-pill">Blade Template</span>
                    <span class="age-pill">Bootstrap 5</span>
                    <span class="age-pill">MySQL</span>
                    <span class="age-pill">Migration &amp; Seeder</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection