<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionsResource\Pages;
use App\Filament\Resources\SectionsResource\RelationManagers;
use App\Models\Sections;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Closure;
use Illuminate\Support\Str;

class SectionsResource extends Resource
{
    protected static ?string $model = Sections::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Graveyard Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('graveyard_id')
                    ->relationship('graveyard', 'name'),

                Card::make()->schema([
                    TextInput::make('name')
                    ->reactive()
                    ->required(),
                    TextInput::make('allocated_graves')
                    ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->sortable(),
                TextColumn::make('graveyard.name'),
                TextColumn::make('allocated_graves')
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
            'index' => Pages\ListSections::route('/'),
            'create' => Pages\CreateSections::route('/create'),
            'edit' => Pages\EditSections::route('/{record}/edit'),
        ];
    }
}
