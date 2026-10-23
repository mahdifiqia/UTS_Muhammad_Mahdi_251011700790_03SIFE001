@php
    // Daftar menu navbar. Mau tambah menu? Tambah satu baris di sini.
    $menus = [
        ['label' => 'Home',    'route' => 'home',      'active' => 'home'],
        ['label' => 'Katalog', 'route' => 'toy.index', 'active' => 'toy.*'],
        ['label' => 'Tentang', 'route' => 'about',     'active' => 'about'],
        ['label' => 'Kontak',  'route' => 'contact',   'active' => 'contact'],
    ];
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') | Toko Mainan Anak</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/logo.svg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Fredoka:wght@500;600&display=swap" rel="stylesheet">

    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg site-nav sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
    <img src="{{ asset('assets/images/logo.svg') }}" alt="" width="40" height="40">
    <span class="brand-text">Toko Mainan Anak</span>
</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @foreach ($menus as $menu)
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs($menu['active']) ? 'active' : '' }}"
                               href="{{ route($menu['route']) }}">{{ $menu['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="site-footer mt-5 py-4">
        <div class="container d-flex flex-column flex-md-row justify-content-between gap-2">
            <span>&copy; 2026 Toko Mainan Anak &middot; UTS Rekayasa Web</span>
            <span>Muhammad Mahdi Mahda Fiqia &middot; NIM 251011700790</span>
        </div>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>