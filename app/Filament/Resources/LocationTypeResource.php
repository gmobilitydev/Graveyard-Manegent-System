<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LocationTypeResource\Pages;
use App\Filament\Resources\LocationTypeResource\RelationManagers;
use App\Models\LocationType;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Closure;


class LocationTypeResource extends Resource
{
    protected static ?string $model = LocationType::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Area Management';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Card::make()->schema([
                    TextInput::make('name')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('id'),
                TextColumn::make('name')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLocationTypes::route('/'),
            'create' => Pages\CreateLocationType::route('/create'),
            'edit' => Pages\EditLocationType::route('/{record}/edit'),
        ];
    }
}
