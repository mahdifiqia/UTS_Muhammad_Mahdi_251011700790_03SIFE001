<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    protected $fillable = [
        'name', 'age_group', 'category', 'price', 'image', 'description',
    ];

    // {{ $toy->formatted_price }} -> Rp 85.000
    public function getFormattedPriceAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    // Alamat gambar di public/assets/images, atau gambar pengganti kalau file belum ada
    public function getImageUrlAttribute(): string
    {
        if (is_file(public_path('assets/images/' . $this->image))) {
            return asset('assets/images/' . $this->image);
        }

        $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600">'
             . '<rect width="600" height="600" fill="#F4F6FB"/>'
             . '<text x="300" y="360" font-size="200" text-anchor="middle">🧸</text></svg>';

        return 'data:image/svg+xml;utf8,' . rawurlencode($svg);
    }
}