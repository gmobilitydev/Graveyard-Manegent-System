<?php

namespace App\Filament\Resources\GraveyardResource\Pages;

use App\Filament\Resources\GraveyardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGraveyard extends CreateRecord
{
    protected static string $resource = GraveyardResource::class;
    protected function getRedirectURL(): string{
        return $this->getResource()::getUrl('index');
    }
}
