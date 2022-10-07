<?php

namespace App\Filament\Resources\RegionResource\Widgets;

use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class Regions extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        // ...
        return Order::query()->latest()->limit(10);

    }

    protected function getTableColumns(): array
    {
        return [
            // ...

            TextColumn::make('id'),
            TextColumn::make('name')->sortable(),
        ];
    }
}
