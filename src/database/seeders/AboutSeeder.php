<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::updateOrCreate(
            [
                // kondisi unik
                'section_key' => 'about_main',
            ],
            [
                'title' => 'Sistem Absensi Digital Modern',
                'subtitle' => 'Tentang Aplikasi',
                'description' => 'Aplikasi absensi berbasis QR Code untuk meningkatkan efisiensi, transparansi, dan akurasi pencatatan kehadiran.',
                'image' => null, // fallback ke image default di blade
                'metadata' => [
                    'tentang' => [
                        'label' => 'Tentang Aplikasi',
                        'title' => 'Apa itu Sistem Absensi QR Code?',
                        'content' => '<p>Aplikasi Absensi QR Code adalah solusi modern untuk menggantikan sistem absensi manual yang memakan waktu dan rentan terhadap manipulasi data.</p>
                                      <p>Dengan teknologi QR Code, setiap mahasiswa atau karyawan dapat melakukan scan QR Code secara real-time dan data langsung tersimpan di sistem.</p>',
                    ],
                    'visi' => [
                        'label' => 'Visi & Misi',
                        'title' => 'Visi dan Misi Kami',
                        'content' => '<p><strong>Visi:</strong> Mewujudkan sistem absensi yang efisien, transparan, dan modern.</p>
                                      <p><strong>Misi:</strong></p>
                                      <ul>
                                          <li>Mempermudah proses pencatatan kehadiran</li>
                                          <li>Meminimalisir kecurangan absensi</li>
                                          <li>Menyediakan data yang akurat dan real-time</li>
                                      </ul>',
                    ],
                    'latar' => [
                        'label' => 'Latar Belakang',
                        'title' => 'Permasalahan Absensi Manual',
                        'content' => '<p>Ditemukan bahwa sistem absensi manual memiliki banyak kelemahan, seperti pencatatan yang tidak akurat, data yang mudah dimanipulasi, serta proses verifikasi yang lambat.</p>
                                      <p>Sistem Absensi QR Code ini dirancang sebagai solusi atas permasalahan tersebut.</p>',
                    ],
                ],
            ]
        );
    }
}
