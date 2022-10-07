<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GraveResource\Pages;
use App\Filament\Resources\GraveResource\RelationManagers;
use App\Models\Grave;
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
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\Toggle;

use Filament\Forms\Components\KeyValue;



class GraveResource extends Resource
{
    protected static ?string $model = Grave::class;
    protected static ?string $recordTitleAttribute = 'grave_number';

    protected static ?string $navigationIcon = 'heroicon-o-view-grid';
    protected static ?string $navigationGroup = 'Graveyard Management';

    public static ?string $location;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('grave_type_id')
                    ->relationship('grave', 'name'),
                Select::make('section_id')
                    ->relationship('section', 'name'),
                Card::make()->schema([
                    $graveNumber = TextInput::make('grave_number')
                    ->reactive()
                    ->required(),
                Toggle::make('grave_status'),
                ])


            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('grave_key')->sortable(),
                TextColumn::make('grave_type.name'),

                TextColumn::make('section.name'),
                TextColumn::make('section.graveyard.name')->Label('Graveyard'),
                TextColumn::make('section.graveyard.location.name')->Label('City/Town'),
                TextColumn::make('section.graveyard.location.region.name')->Label('Region'),

                BooleanColumn::make('grave_status')



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
            'index' => Pages\ListGraves::route('/'),
            'create' => Pages\CreateGrave::route('/create'),
            'edit' => Pages\EditGrave::route('/{record}/edit'),
        ];
    }
}
