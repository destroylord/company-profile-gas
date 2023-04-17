<?php

namespace Database\Seeders;

use App\Models\Map;
use App\Models\ShopCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopCateorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $shopCategories = [
        [
            'title' => 'popular Fitur',
            'image' => 'image.png',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime impedit ad esse placeat dolorem voluptates perferendis quaerat, accusantium fuga! In aliquid laudantium ut iusto commodi obcaecati dolorem, perspiciatis repellat earum.' 
        ],
        [
            'title' => 'Kategori Toko',
            'image' => 'image.png',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime impedit ad esse placeat dolorem voluptates perferend'
        ],
        [
            'title' => 'Fitur Maps',
            'image' => 'image.png',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime impedit ad esse placeat dolorem voluptates perferend'
        ],
        [
            'title' => 'Tentang Kami',
            'image' => 'image.png',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime impedit ad esse placeat dolorem voluptates perferend'
        ],
    ];
    public function run(): void
    {
        foreach($this->shopCategories as $shopCategory) { ShopCategory::create($shopCategory); }

        Map::create( [
            'image' => ''
        ]);
    }
}
