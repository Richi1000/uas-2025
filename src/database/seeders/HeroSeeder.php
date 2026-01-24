<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::firstOrCreate([
            'title' => 'Sistem Absensi Digital Modern',
            'description' => 'Aplikasi absensi berbasis QR Code yang menggantikan sistem konvensional. Cepat, efisien, akurat, dan dapat diakses melalui smartphone tanpa perangkat keras khusus.',
            'button_text' => 'Mulai Absensi',
            'button_link' => '/login',
            'image' => null,
        ]);
    }
}

