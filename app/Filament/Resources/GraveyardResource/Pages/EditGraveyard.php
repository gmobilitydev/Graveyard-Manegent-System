<?php

namespace App\Filament\Resources\GraveyardResource\Pages;

use App\Filament\Resources\GraveyardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGraveyard extends EditRecord
{
    protected static string $resource = GraveyardResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
