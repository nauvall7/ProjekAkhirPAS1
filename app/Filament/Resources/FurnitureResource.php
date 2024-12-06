<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FurnitureResource\Pages;
use App\Filament\Resources\FurnitureResource\RelationManagers;
use App\Models\Furniture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FurnitureResource extends Resource
{
    protected static ?string $model = Furniture::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->label('Item')
                ->required(),
            FileUpload::make('picture'),
            Forms\Components\Textarea::make('price')
                ->label('Harga')
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\ImageColumn::make('picture')
                ])
                ->filters([
                    //
                ])
                ->actions([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                ])
                ->bulkActions([
                    Tables\Actions\BulkActionGroup::make([
                        Tables\Actions\DeleteBulkAction::make(),
                    ]),
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
            'index' => Pages\ListFurniture::route('/'),
            'create' => Pages\CreateFurniture::route('/create'),
            'edit' => Pages\EditFurniture::route('/{record}/edit'),
        ];
    }
}
