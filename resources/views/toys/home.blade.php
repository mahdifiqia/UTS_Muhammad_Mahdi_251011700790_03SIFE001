@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container py-4">

    <div class="mb-5">
        <h1 class="section-title mb-2">Selamat datang di Toko Mainan Anak</h1>
        <p class="text-secondary mb-0" style="max-width: 36rem;">
            Mainan edukatif, kendaraan, boneka, dan action figure untuk berbagai usia.
        </p>
    </div>

    <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="h4 fw-bold mb-0">Produk terbaru</h2>
        <a href="{{ route('toy.index') }}" class="fw-semibold text-decoration-none">Lihat semua</a>
    </div>

    @if ($latest->isEmpty())
        <div class="alert alert-warning">Belum ada produk. Jalankan <code>php artisan migrate:fresh --seed</code>.</div>
    @else
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            @foreach ($latest as $toy)
                <div class="col">
                    <article class="toy-card h-100 d-flex flex-column position-relative">
                        <div class="toy-media">
                            <img src="{{ $toy->image_url }}" alt="{{ $toy->name }}">
                        </div>
                        <div class="p-3 d-flex flex-column flex-grow-1">
                            <span class="toy-cat mb-1">{{ $toy->category }}</span>
                            <h3 class="toy-name mb-2">{{ $toy->name }}</h3>
                            <div class="d-flex justify-content-between align-items-center mb-3 mt-auto">
                                <span class="toy-price">{{ $toy->formatted_price }}</span>
                                <span class="age-pill">{{ $toy->age_group }}</span>
                            </div>
                            <a href="{{ route('toy.show', $toy) }}" class="btn btn-ink w-100 stretched-link">Lihat detail</a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('toy.index') }}" class="btn btn-line">Lihat semua mainan</a>
        </div>
    @endif
</div>
@endsection