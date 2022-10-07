<?php

namespace App\Filament\Resources\GraveyardResource\Pages;

use App\Filament\Resources\GraveyardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGraveyards extends ListRecords
{
    protected static string $resource = GraveyardResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            GraveyardResource\Widgets\GraveyardOverview::class,
        ];
    }
}
