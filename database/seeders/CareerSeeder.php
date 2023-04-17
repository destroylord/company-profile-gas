<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $carrers = [
        [
            'title' => 'Marketing Communication',
            'image' => 'image.png',
            'description' => 'Merancang strategi komunikasi pemasaran mulai dari branding, iklan dan pemasaran langsung.' 
        ],
        [
            'title' => 'Customer Service',
            'image' => 'image.png',
            'description' => 'Menjawab telepon, menanggapi pelanggan melalui email, dan memberikan informasi terkait layanan.'
        ],
        [
            'title' => 'Administration',
            'image' => 'image.png',
            'description' => 'Membuat arsip data perusahaan, mengatur agenda kantor, dan menyusun laporan keuangan perusahaan.'
        ],
        [
            'title' => 'Content Writer',
            'image' => 'image.png',
            'description' => 'Membuat dan mengelola konten web atau artikel yang dapat membangun branding perusahaan.'
        ],
    ];
    public function run(): void
    {
        //
        foreach($this->carrers as $career) { Career::create($career); }
    }
}
