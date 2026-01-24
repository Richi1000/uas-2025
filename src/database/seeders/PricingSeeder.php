<?php

namespace Database\Seeders;

use App\Models\Pricing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pricing::updateOrCreate(
    ['section_key' => 'pricing_main'],
    [
        'small_title' => 'Pricing',
        'title' => 'Pricing & Plans',
        'description' => 'Pilihan paket sesuai dengan kebutuhan absensi QR digital anda.',
        'plans' => [
            [
                'name' => 'Pertama kali coba',
                'description' => 'Cocok untuk pemula',
                'price' => 0,
                'currency' => '$',
                'duration' => '/week',
                'featured' => false,
                'features' => [
                    ['text' => 'Uji coba gratis selama 7 hari.', 'active' => true],
                ],
            ],
            [
                'name' => 'Intermediate',
                'description' => 'Paket standar',
                'price' => 15,
                'currency' => '$',
                'duration' => '/mo',
                'featured' => true,
                'features' => [
                    ['text' => 'Cocok untuk anda yang mau berlangganan', 'active' => true],

                ],
            ],
            [
                'name' => 'Premium',
                'description' => 'Solusi cepat',
                'price' => 50,
                'currency' => '$',
                'duration' => '/unlimited',
                'featured' => false,
                'features' => [
                    ['text' => 'Cocok untuk anda untuk memakai fiture selamanya', 'active' => true],
                ],
            ],
        ],
    ]
);
    }
}
