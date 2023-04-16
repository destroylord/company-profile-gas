<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShopCategoryResource\Pages;
use App\Filament\Resources\ShopCategoryResource\RelationManagers;
use App\Models\ShopCategory;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShopCategoryResource extends Resource
{
    protected static ?string $model = ShopCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('ttle')
                ->label('Judul Toko')
                    ->placeholder('kolom harus diisi...')
                    ->required()
                    ->autofocus(),
                FileUpload::make('image')
                ->label(__("Foto Toko"))
                 ->required()
                    ->directory('features')
                    ->maxSize(5120),
                Textarea::make('description')
                ->label(__('Short Deskripsi'))
                ->required()
                ->rows(2)
                ->minLength(50)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListShopCategories::route('/'),
            'create' => Pages\CreateShopCategory::route('/create'),
            'edit' => Pages\EditShopCategory::route('/{record}/edit'),
        ];
    }    
}
