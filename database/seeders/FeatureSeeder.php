<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     protected $features = [
        [
            'name' => 'popular Fitur',
            'image' => 'image.png',
            
        ],
        [
            'name' => 'Kategori Toko',
            'image' => 'image.png',
            
        ],
        [
            'name' => 'Fitur Maps',
            'image' => 'image.png',
        ],
        [
            'name' => 'Tentang Kami',
            'image' => 'image.png'
        ],
        [
            'name' => 'Temukan Karier Impianmu',
            'image' => 'image.png'
        ]
    ];
    public function run(): void
    {
        foreach($this->features as $section) { Feature::create($section); }
    }
}
