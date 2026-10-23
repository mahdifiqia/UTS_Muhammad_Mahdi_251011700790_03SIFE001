@extends('layouts.app')

@section('title', $toy->name)

@php
    // Ganti dengan nomor WhatsApp kamu (awali 62, tanpa 0 dan tanpa +)
    $waNumber = '62895611511955';

    $waText = "Halo, saya ingin memesan:\n"
            . "Produk: {$toy->name}\n"
            . "Harga: {$toy->formatted_price}\n"
            . "Apakah masih tersedia?";

    $waLink = 'https://wa.me/' . $waNumber . '?text=' . rawurlencode($waText);
@endphp

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('toy.index') }}">Katalog</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $toy->name }}</li>
        </ol>
    </nav>

    <div class="row g-5 align-items-center">
        <div class="col-md-6">
            <div class="toy-media rounded-4 border">
                <img src="{{ $toy->image_url }}" alt="{{ $toy->name }}" style="max-height: 460px;">
            </div>
        </div>

        <div class="col-md-6">
            <span class="toy-cat">{{ $toy->category }}</span>
            <h1 class="hero-title fs-1 mt-1 mb-3">{{ $toy->name }}</h1>
            <p class="toy-price fs-2 mb-3">{{ $toy->formatted_price }}</p>
            <p class="text-secondary mb-4" style="line-height: 1.7;">{{ $toy->description }}</p>

            <dl class="row mb-4">
                <dt class="col-5 text-secondary fw-normal">Kelompok usia</dt>
                <dd class="col-7"><span class="age-pill">{{ $toy->age_group }}</span></dd>
                <dt class="col-5 text-secondary fw-normal">Kategori</dt>
                <dd class="col-7">{{ $toy->category }}</dd>
            </dl>

            <div class="d-flex flex-wrap gap-2">
                <a href="{{ $waLink }}" target="_blank" rel="noopener" class="btn btn-order">Pesan via WhatsApp</a>
                <a href="{{ route('toy.index') }}" class="btn btn-line">Kembali ke katalog</a>
            </div>
        </div>
    </div>

    @if ($others->isNotEmpty())
        <h2 class="section-title fs-3 mt-5 mb-4">Mainan lainnya</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            @foreach ($others as $item)
                <div class="col">
                    <article class="toy-card h-100 d-flex flex-column position-relative">
                        <div class="toy-media">
                            <img src="{{ $item->image_url }}" alt="{{ $item->name }}">
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <span class="toy-cat mb-1">{{ $item->category }}</span>
                            <h3 class="toy-name mb-2">{{ $item->name }}</h3>
                            <div class="d-flex justify-content-between align-items-center mb-3 mt-auto">
                                <span class="toy-price">{{ $item->formatted_price }}</span>
                                <span class="age-pill">{{ $item->age_group }}</span>
                            </div>
                            <a href="{{ route('toy.show', $item) }}" class="btn btn-ink w-100 stretched-link">Lihat detail</a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection