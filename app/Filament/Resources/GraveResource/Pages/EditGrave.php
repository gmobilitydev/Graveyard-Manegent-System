<?php

namespace App\Filament\Resources\GraveResource\Pages;

use App\Filament\Resources\GraveResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGrave extends EditRecord
{
    protected static string $resource = GraveResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
