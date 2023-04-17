<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     protected $sections = [
        [
            'title' => 'popular Fitur',
            'short_description' => 'Nikmati berbagai fitur menarik yang kami berikan',
            
        ],
        [
            'title' => 'Kategori Toko',
            'short_description' => 'Apapun jenis tokomu dapat bergabung bersama GAS',
            
        ],
        [
            'title' => 'Fitur Maps',
            'short_description' => 'Aplikasi Gas akan membantumu dalam memantau stok produk tokomu dan menjangkau customer yang lebih luas',
        ],
        [
            'title' => '',
            'short_description' => '',
        ],
        [
            'title' => '',
            'short_description' => '',
        ],
        [
            'title' => 'Tentang Kami',
            'short_description' => 'GAS adalah aplikasi untuk memudahkan pelaku usaha menjangkau calon pembel lebih luas Melalui Gerakan #AyoBelanjaTokoTetangga GAS mengajak untuk menjelajah dan menduku usaha-usaha disekitarmu.'
        ],
        [
            'title' => 'Temukan Karier Impianmu',
            'short_description' => 'Mari bergabung bersama kami. Jadilah bagian dari kamii dan kembangkan bakat, ide kreatifmu dalam GAS'
        ]
    ];

    public function run(): void
    {
        foreach($this->sections as $section) { Section::create($section); }
    }
}
