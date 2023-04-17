<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Feature;
use App\Models\Header;
use App\Models\Map;
use App\Models\Section;
use App\Models\SectionContent;
use App\Models\ShopCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'sections' => Section::all(),
            'features' => Feature::all(),
            'shopCategories' => ShopCategory::all(),
            'map' => Map::first(),
            'header' => Header::first(),
            'sectionContent' => SectionContent::all(),
            'careers' => Career::all()
        ]);
    }
}
