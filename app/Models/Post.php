<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    // 🟢 Tentukan kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'published',
    ];

    // 🟢 (Opsional) Generate slug otomatis kalau slug kosong
    protected static function booted()
    {
        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    // 🟢 (Opsional) Biar URL pakai slug, bukan ID
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
