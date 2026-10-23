@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="container py-4">
    <h1 class="section-title mb-4">Kontak</h1>

    <div class="row g-4">
        <div class="col-lg-5">
            <div class="side-box h-100">
                <h2 class="h5 fw-bold mb-3">Hubungi kami</h2>
                <dl class="row mb-0">
                    <dt class="col-sm-4 text-secondary fw-normal">Alamat</dt>
                    <dd class="col-sm-8">Jl. Puspitek Raya No. 10, Serpong, Tangerang Selatan</dd>
                    <dt class="col-sm-4 text-secondary fw-normal">Telepon</dt>
                    <dd class="col-sm-8">(021) 742 7010</dd>
                    <dt class="col-sm-4 text-secondary fw-normal">Email</dt>
                    <dd class="col-sm-8">halo@tokomainan.test</dd>
                    <dt class="col-sm-4 text-secondary fw-normal">Jam buka</dt>
                    <dd class="col-sm-8 mb-0">Senin&ndash;Sabtu, 09.00&ndash;17.00 WIB</dd>
                </dl>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="side-box h-100">
                <h2 class="h5 fw-bold mb-3">Pertanyaan yang sering diajukan</h2>
                <div class="accordion accordion-flush" id="faq">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                Bagaimana memilih mainan sesuai usia?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body text-secondary">
                                Setiap produk punya label kelompok usia. Gunakan itu sebagai acuan, dan pilih yang sesuai dengan minat anak.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                Bagaimana cara mencari mainan?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body text-secondary">
                                Buka menu Katalog, lalu gunakan kotak pencarian atau pilih kategori di sisi kiri.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                Apakah harga sudah termasuk pengiriman?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faq">
                            <div class="accordion-body text-secondary">
                                Harga yang tertera adalah harga produk. Ongkos kirim dihitung terpisah.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection