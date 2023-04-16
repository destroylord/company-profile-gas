<?php

namespace App\Filament\Resources\MapResource\Pages;

use App\Filament\Resources\MapResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaps extends ListRecords
{
    protected static string $resource = MapResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
