<?php

namespace App\Filament\Resources\GraveTypeResource\Pages;

use App\Filament\Resources\GraveTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGraveType extends CreateRecord
{
    protected static string $resource = GraveTypeResource::class;
    protected function getRedirectURL(): string{
        return $this->getResource()::getUrl('index');
    }
}
