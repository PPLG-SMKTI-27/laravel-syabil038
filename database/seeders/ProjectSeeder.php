<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'judul' => 'Sistem Manajemen Inventor',
                'description' => 'Aplikasi web untuk mengelola inventory dengan fitur lengkap menggunakan Laravel dan MySQL.', // SUDAH DIUBAH
                'kategori' => 'laravel',
                'warna' => '#3b82f6',
                'icon' => 'fab fa-laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Aplikasi Dashboard Analytics',
                'description' => 'Dashboard real-time dengan visualisasi data menggunakan React, Chart.js, dan REST API.', // SUDAH DIUBAH
                'kategori' => 'react',
                'warna' => '#61dafb',
                'icon' => 'fab fa-react',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'E-Commerce Platform',
                'description' => 'Platform e-commerce lengkap dengan Laravel backend dan React frontend.', // SUDAH DIUBAH
                'kategori' => 'fullstack',
                'warna' => 'linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%)',
                'icon' => 'fas fa-shopping-cart',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Aplikasi Manajemen Proyek',
                'description' => 'Aplikasi kolaborasi tim dengan Vue.js dan Firebase.', // SUDAH DIUBAH
                'kategori' => 'vue',
                'warna' => '#42b883',
                'icon' => 'fab fa-vuejs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}