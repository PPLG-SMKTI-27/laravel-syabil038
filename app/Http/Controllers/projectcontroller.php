<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
{
    $nama = 'Syabil';

    $projects = [
        [
            'judul' => 'Sistem Manajemen Inventor',
            'deskripsi' => 'Aplikasi web untuk mengelola inventory dengan fitur lengkap menggunakan Laravel dan MySQL.',
            'kategori' => 'laravel',
            'warna' => '#3b82f6',
            'icon' => 'fab fa-laravel'
        ],
        [
            'judul' => 'Aplikasi Dashboard Analytics',
            'deskripsi' => 'Dashboard real-time dengan visualisasi data menggunakan React, Chart.js, dan REST API.',
            'kategori' => 'react',
            'warna' => '#61dafb',
            'icon' => 'fab fa-react'
        ],
        [
            'judul' => 'E-Commerce Platform',
            'deskripsi' => 'Platform e-commerce lengkap dengan Laravel backend dan React frontend.',
            'kategori' => 'fullstack',
            'warna' => 'linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%)',
            'icon' => 'fas fa-shopping-cart'
        ],
        [
            'judul' => 'Aplikasi Manajemen Proyek',
            'deskripsi' => 'Aplikasi kolaborasi tim dengan Vue.js dan Firebase.',
            'kategori' => 'vue',
            'warna' => '#42b883',
            'icon' => 'fab fa-vuejs'
        ]
        
        
        
    ];

    return view('project', compact('nama', 'projects'));
}

}