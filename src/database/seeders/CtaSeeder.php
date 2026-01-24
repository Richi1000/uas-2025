<?php

namespace Database\Seeders;

use App\Models\Cta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CtaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cta::create([
    'section_key' => 'cta_main',
    'title' => 'Siap Beralih ke Sistem Absensi Digital?',
    'description' => 'Gunakan sistem absensi QR Code untuk mempermudah pencatatan kehadiran secara real-time dan terintegrasi dengan database yang aman.',
    'button_text' => 'Mulai Sekarang',
    'button_link' => '#pricing',
    'is_active' => true,
        ]);
    }
}
