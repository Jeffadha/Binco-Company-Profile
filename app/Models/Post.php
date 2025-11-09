<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'image', 'slug'];

    private static function makeSlug($title)
    {
        return Str::slug($title) . '-' . Str::random(4);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = self::makeSlug($post->title);
        });

        static::updating(function ($post) {
            if ($post->isDirty('title')) {
                $post->slug = self::makeSlug($post->title);
            }
        });
    }
}
