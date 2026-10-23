<?php

namespace App\Http\Controllers;

use App\Models\Toy;

class ToyController extends Controller
{
    // Halaman Home: sapaan singkat dan produk terbaru
    public function home()
    {
        $latest = Toy::orderByDesc('id')->take(4)->get();

        return view('toys.home', compact('latest'));
    }

    // Halaman Katalog: daftar produk dengan pagination (6 per halaman)
    public function index()
    {
        $toys = Toy::orderBy('id')->paginate(6);

        return view('toys.index', compact('toys'));
    }

    // Halaman detail produk (otomatis 404 kalau ID tidak ada)
    public function show(Toy $toy)
    {
        $others = Toy::where('id', '!=', $toy->id)->take(3)->get();

        return view('toys.show', compact('toy', 'others'));
    }
}