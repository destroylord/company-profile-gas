<?php

namespace Database\Seeders;

use App\Models\SectionContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    protected $sectionContents = [
        [
            'title' => 'Daftarkan Tokomu Segera',
            'hero' => 'image.png',
            'link_download' => 'https://googleplay.com'
        ],
        [
            'title' => 'Download Sekarang',
            'hero' => 'image.png',
            'link_download' => 'https://googleplay.com'
        ],
    ];
    public function run(): void
    {
        //
        foreach($this->sectionContents as $sectionContent) { SectionContent::create($sectionContent); }
    }
}
