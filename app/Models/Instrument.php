<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'price',
        'description',
        'image',
        'type',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'integer',
        ];
    }

    protected function formattedPrice(): Attribute
    {
        return Attribute::get(
            fn () => 'Rp ' . number_format($this->price, 0, ',', '.')
        );
    }


    protected function imageUrl(): Attribute
    {
        return Attribute::get(function () {
            $name = pathinfo($this->image, PATHINFO_FILENAME);

            foreach (['jpg', 'jpeg', 'png', 'webp'] as $ext) {
                if (file_exists(public_path("assets/images/{$name}.{$ext}"))) {
                    return asset("assets/images/{$name}.{$ext}");
                }
            }

            return 'data:image/svg+xml;charset=UTF-8,' . rawurlencode(
                '<svg xmlns="http://www.w3.org/2000/svg" width="800" height="600">'
                . '<rect width="100%" height="100%" fill="#1C1C1C"/>'
                . '<text x="50%" y="50%" fill="#ADB5BD" font-family="sans-serif" font-size="32" text-anchor="middle">'
                . 'Gambar belum tersedia</text></svg>'
            );
        });
    }

    public function scopeSearch(Builder $query, ?string $term): Builder
    {
        $words = preg_split('/\s+/', trim((string) $term), -1, PREG_SPLIT_NO_EMPTY);

        foreach (array_slice($words, 0, 5) as $word) {
            $query->where(function (Builder $q) use ($word) {
                $q->where('name', 'like', "%{$word}%")
                ->orWhere('brand', 'like', "%{$word}%")
                ->orWhere('type', 'like', "%{$word}%");
            });
    }

    return $query;
}

    public function scopeOfType(Builder $query, ?string $type): Builder
    {
        return $query->when(filled($type), fn (Builder $q) => $q->where('type', $type));
    }

    public function scopeOfBrand(Builder $query, ?string $brand): Builder
    {
        return $query->when(filled($brand), fn (Builder $q) => $q->where('brand', $brand));
    }
}