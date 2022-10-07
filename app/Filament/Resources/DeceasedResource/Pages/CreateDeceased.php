<?php

namespace App\Filament\Resources\DeceasedResource\Pages;

use App\Filament\Resources\DeceasedResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDeceased extends CreateRecord
{
    protected static string $resource = DeceasedResource::class;
    protected function getRedirectURL(): string{
        return $this->getResource()::getUrl('index');
    }
}
