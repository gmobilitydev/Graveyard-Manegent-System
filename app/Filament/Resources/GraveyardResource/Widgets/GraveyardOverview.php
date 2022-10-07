<?php

namespace App\Filament\Resources\GraveyardResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Graveyard;

class GraveyardOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Graveyards', Graveyard::all()->count()),

        ];
    }
}
