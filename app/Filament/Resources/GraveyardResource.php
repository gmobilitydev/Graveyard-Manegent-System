<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GraveyardResource\Pages;
use Filament\Resources\RelationManagers\RelationManager;
use App\Filament\Resources\GraveyardResource\RelationManagers;
use App\Filament\Resources\GraveyardResource\RelationManagers\SectionsRelationManager;
use App\Models\Graveyard;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Closure;
use Illuminate\Support\Str;

class GraveyardResource extends Resource
{
    protected static ?string $model = Graveyard::class;

    protected static ?string $navigationIcon = 'heroicon-o-library';

    protected static ?string $navigationGroup = 'Graveyard Management';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('location_id')
                    ->relationship('location', 'name'),

                Card::make()->schema([
                    TextInput::make('name')
                    ->reactive()
                    ->required(),
                TextInput::make('address')->required(),

                SpatieMediaLibraryFileUpload::make('graveyard_image')->collection('graveyard'),


                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                SpatieMediaLibraryImageColumn::make('graveyard_image')->collection('graveyard')->conversion('thumb'),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('location.name')->searchable(),
                TextColumn::make('address'),

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
            SectionsRelationManager::class
        ];
    }
    public static function getWidgets(): array
    {
        return [
            GraveyardResource\Widgets\GraveyardOverview::class,

        ];

    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGraveyards::route('/'),
            'create' => Pages\CreateGraveyard::route('/create'),
            'edit' => Pages\EditGraveyard::route('/{record}/edit'),
        ];
    }
}
