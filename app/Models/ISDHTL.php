<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ISDHTL extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected static function booted()
    {
        parent::booted();

        static::saving(function ($post) {
            $post->user_id = Auth::id();
        });
    }
}
