<?php

namespace Database\Seeders;

use App\Models\Toy;
use Illuminate\Database\Seeder;

class ToySeeder extends Seeder
{
    public function run(): void
    {
        Toy::truncate();

        $toys = [
            [
                'name' => 'Action Figure Elvis Presley Pharaoh Suit',
                'age_group' => '8+ Tahun',
                'category' => 'Action Figure / Collectible',
                'price' => 220000,
                'image' => 'doll.jpg',
                'description' => 'Figur koleksi vinyl eksklusif edisi Elvis Presley Pharaoh Suit.',
            ],
            [
                'name' => 'Remote Control Car Racing High Speed',
                'age_group' => '6-14 Tahun',
                'category' => 'Action & RC',
                'price' => 250000,
                'image' => 'rc_car.jpg',
                'description' => 'Mobil remote control berkecepatan tinggi dengan desain sport aerodinamis.',
            ],
            [
                'name' => 'Lego Super Mario Fire Luigi vs. Nabbit',
                'age_group' => '7+ Tahun',
                'category' => 'Educational & Building',
                'price' => 350000,
                'image' => 'lego.jpg',
                'description' => 'Mainan balok susun interaktif seri Super Mario untuk melatih kreativitas.',
            ],
            [
                'name' => 'Puzzle',
                'age_group' => '5-10 Tahun',
                'category' => 'Educational & Building',
                'price' => 65000,
                'image' => 'puzzle.jpg',
                'description' => 'Puzzle 100 keping dengan gambar warna-warni untuk melatih konsentrasi dan kemampuan memecahkan masalah.',
            ],
            [
                'name' => 'Boneka Teddy Bear Cokelat',
                'age_group' => '0+ Tahun',
                'category' => 'Boneka & Plush',
                'price' => 120000,
                'image' => 'teddy_bear.jpg',
                'description' => 'Boneka beruang berbahan plush lembut, aman untuk bayi, dan bisa dicuci. Tinggi 40 cm.',
            ],
            [
                'name' => 'Kereta Api Kayu Lengkap dengan Rel',
                'age_group' => '3-7 Tahun',
                'category' => 'Kendaraan',
                'price' => 199000,
                'image' => 'train.jpg',
                'description' => 'Kereta api kayu dengan 40 potong rel yang bisa dirangkai bebas. Gerbong terhubung magnet.',
            ],
            [
    'name' => 'Kitchen Set Dapur Masak-Masakan',
    'age_group' => '3-8 Tahun',
    'category' => 'Pretend Play',
    'price' => 175000,
    'image' => 'kitchen_set.jpg',
    'description' => 'Kitchen set mini berisi panci, wajan, spatula, dan bahan makanan mainan untuk bermain peran.',
],
            [
                'name' => 'Papan Gambar Magnetik',
                'age_group' => '3-8 Tahun',
                'category' => 'Kreatif',
                'price' => 55000,
                'image' => 'drawing_board.jpg',
                'description' => 'Papan gambar magnetik yang bisa dihapus berkali-kali tanpa tinta. Ringan dan praktis dibawa.',
            ],
            [
                'name' => 'Robot Transformer Berubah Jadi Mobil',
                'age_group' => '6-12 Tahun',
                'category' => 'Action & RC',
                'price' => 185000,
                'image' => 'robot.jpg',
                'description' => 'Robot yang bisa berubah bentuk menjadi mobil dalam beberapa langkah. Sendi bergerak dan kokoh.',
            ],
            [
                'name' => 'Balok Susun Kayu Warna-Warni',
                'age_group' => '2-5 Tahun',
                'category' => 'Educational & Building',
                'price' => 85000,
                'image' => 'wooden_blocks.jpg',
                'description' => 'Set 50 balok kayu berwarna cerah untuk melatih koordinasi tangan dan kreativitas.',
            ],
        ];

        foreach ($toys as $toy) {
            Toy::create($toy);
        }
    }
}