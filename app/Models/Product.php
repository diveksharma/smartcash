<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'name',
        'slug',
        'description',
        'price_currency',
        'image',
        'tag',
        'recommendation',
        'status',
        'buyable',
    ];

    protected $casts = [
        'description' => 'array',
        'price_currency' => 'array',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
