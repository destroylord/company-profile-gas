<?php

namespace App\Filament\Resources\SectionContentResource\Pages;

use App\Filament\Resources\SectionContentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionContent extends EditRecord
{
    protected static string $resource = SectionContentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
