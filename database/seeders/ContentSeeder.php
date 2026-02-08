<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 15; $i++) {
            Content::create([
                'tittle' => "Artikel Edukasi Ke-$i",
                'type' => 'article',
                'body' => "Ini adalah konten artikel mendalam ke-$i yang membahas strategi market analysis untuk industri F&B.",
                'url' => null,
            ]);
        }

        for ($j = 1; $j <= 15; $j++) {
            Content::create([
                'tittle' => "Video Tutorial Ke-$j",
                'type' => 'video',
                'body' => null,
                'url' => "https://www.youtube.com/embed/dQw4w9WgXcQ",
            ]);
        }
    }
}
