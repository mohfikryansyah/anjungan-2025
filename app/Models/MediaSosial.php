<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MediaSosial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tipe_media_sosial(): BelongsTo
    {
        return $this->belongsTo(TipeMediaSosial::class);
    }
}
