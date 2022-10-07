<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeceasedResource\Pages;
use App\Filament\Resources\DeceasedResource\RelationManagers;
use App\Models\Deceased;
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

class DeceasedResource extends Resource
{
    protected static ?string $model = Deceased::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'Graveyard Management';
    protected static ?string $navigationLabel = 'Deceased';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //Edited The below line
                    Select::make('grave_id')
                        ->relationship('grave_type', 'name'),
                Card::make()->schema([
                    $firstName = TextInput::make('first_names')
                    ->reactive()
                    ->required(),
                    $lastName = TextInput::make('surname')
                    ->reactive()
                    ->required(),
                    $dob = TextInput::make('dob')
                    ->reactive()
                    ->required(),
                    $dod = TextInput::make('dod')
                    ->reactive()
                    ->required(),
                    $image = TextInput::make('image')
                    ->reactive()
                    ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //

                TextColumn::make(''),
                TextColumn::make('deceased.firstname')->Label('Firstname'),
                TextColumn::make('deceased.lastname')->Label('Last Name'),
                TextColumn::make('deceased.image')->Label('Image')
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
            'index' => Pages\ListDeceaseds::route('/'),
            'create' => Pages\CreateDeceased::route('/create'),
            'edit' => Pages\EditDeceased::route('/{record}/edit'),
        ];
    }
}
