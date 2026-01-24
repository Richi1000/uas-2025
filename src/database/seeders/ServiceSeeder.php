<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [


            [
                'name' => 'Scan QR Cepat',
                'icon' => 'lni lni-mobile',
                'description' => 'Sistem absensi dengan scan QR code yang cepat dan akurat. Hanya perlu menunjukkan QR code dan data kehadiran langsung tercatat.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Realtime Data',
                'icon' => 'lni lni-graph',
                'description' => 'Data kehadiran secara real-time, sehingga admin dan dosen dapat melihat kehadiran mahasiswa secara langsung.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Anti-Fake GPS',
                'icon' => 'lni lni-map-marker',
                'description' => 'Sistem pendeteksi lokasi untuk mencegah manipulasi kehadiran dari jarak jauh.',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}

