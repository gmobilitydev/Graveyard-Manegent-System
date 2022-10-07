<?php

namespace App\Filament\Resources\GraveTypeResource\Pages;

use App\Filament\Resources\GraveTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGraveType extends EditRecord
{
    protected static string $resource = GraveTypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
