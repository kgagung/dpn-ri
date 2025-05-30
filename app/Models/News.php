<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image', 'news_date', 'slug'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($news) {
            $news->slug = Str::slug($news->title);
        });
    }
}
