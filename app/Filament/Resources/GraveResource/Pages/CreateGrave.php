<?php

namespace App\Filament\Resources\GraveResource\Pages;

use App\Filament\Resources\GraveResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGrave extends CreateRecord
{
    protected static string $resource = GraveResource::class;
    protected function getRedirectURL(): string{
        return $this->getResource()::getUrl('index');
    }
}
