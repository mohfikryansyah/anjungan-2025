<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $casts = [
        'published' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected static function booted()
    {
        parent::booted();

        static::saving(function ($post) {
            $post->slug = Str::slug($post->title);
            $post->user_id = Auth::id();
            $post->excerpt = Str::limit($post->body, 120);
        });
    }
}
