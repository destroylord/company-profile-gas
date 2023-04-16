<?php

namespace App\Filament\Resources\HeaderResource\Pages;

use App\Filament\Resources\HeaderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeader extends EditRecord
{
    protected static string $resource = HeaderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
