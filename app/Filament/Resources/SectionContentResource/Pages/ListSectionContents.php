<?php

namespace App\Filament\Resources\SectionContentResource\Pages;

use App\Filament\Resources\SectionContentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSectionContents extends ListRecords
{
    protected static string $resource = SectionContentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
