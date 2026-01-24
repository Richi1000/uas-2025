<?php

namespace Database\Seeders;

use App\Models\LatestPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LatestPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LatestPost::insert([
        [
        'title' => 'Penerapan Sistem Absensi QR Code',
        'excerpt' => 'Sistem absensi QR Code membantu meningkatkan efisiensi dan akurasi pencatatan kehadiran.',
        'author' => 'Admin',
        'published_at' => now(),
        'is_active' => true,
        ],
        [
        'title' => 'Manfaat Digitalisasi Absensi',
        'excerpt' => 'Digitalisasi absensi meminimalkan kesalahan pencatatan dan meningkatkan transparansi.',
        'author' => 'Admin',
        'published_at' => now(),
        'is_active' => true,
        ],
        [
        'title' => 'Keamanan Data Kehadiran',
        'excerpt' => 'Data absensi tersimpan secara aman dan dapat diakses secara real-time.',
        'author' => 'Admin',
        'published_at' => now(),
        'is_active' => true,
        ],
     ]);
    }
}
