@extends('layouts.app')

@section('title', 'Katalog')

@section('content')
<div class="container py-4">

    <div class="d-flex flex-wrap justify-content-between align-items-end gap-2 mb-4">
        <div>
            <h1 class="section-title mb-1">Katalog Mainan</h1>
            <p class="text-secondary mb-0">Pilih mainan sesuai usia dan minat anak.</p>
        </div>
        @if ($toys->total() > 0)
            <span class="text-secondary">
                Menampilkan {{ $toys->firstItem() }}&ndash;{{ $toys->lastItem() }} dari {{ $toys->total() }} produk
            </span>
        @endif
    </div>

    @if ($toys->isEmpty())
        <div class="alert alert-warning">Belum ada produk. Jalankan <code>php artisan migrate:fresh --seed</code>.</div>
    @else
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            @foreach ($toys as $toy)
                <div class="col">
                    <article class="toy-card h-100 d-flex flex-column position-relative">
                        <div class="toy-media">
                            <img src="{{ $toy->image_url }}" alt="{{ $toy->name }}">
                        </div>
                        <div class="p-3 d-flex flex-column flex-grow-1">
                            <span class="toy-cat mb-1">{{ $toy->category }}</span>
                            <h3 class="toy-name mb-2">{{ $toy->name }}</h3>
                            <p class="small text-secondary mb-3">{{ \Illuminate\Support\Str::limit($toy->description, 80) }}</p>
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

        <div class="d-flex justify-content-center mt-5">
            {{ $toys->links() }}
        </div>
    @endif
</div>
@endsection