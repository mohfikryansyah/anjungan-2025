<?php

namespace Database\Seeders;

use App\Models\TipeMediaSosial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSosialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipeMediaSosial::create([
            'icon' => 'typ-social-facebook-circular',
            'name' => 'facebook'
        ]);
        TipeMediaSosial::create([
            'icon' => 'typ-social-instagram-circular',
            'name' => 'instagram'
        ]);
        TipeMediaSosial::create([
            'icon' => 'typ-social-youtube-circular',
            'name' => 'youtube'
        ]);
        TipeMediaSosial::create([
            'icon' => 'typ-social-twitter-circular',
            'name' => 'twitter'
        ]);
    }
}
