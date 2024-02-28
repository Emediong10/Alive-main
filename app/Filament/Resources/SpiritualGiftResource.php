<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use App\Models\SpiritualGift;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SpiritualGiftResource\Pages;
use App\Filament\Resources\SpiritualGiftResource\RelationManagers;

class SpiritualGiftResource extends Resource
{
    protected static ?string $model = SpiritualGift::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift';

    protected static function shouldRegisterNavigation(): bool
    {
        if(auth()->user()->hasRole(['admin'])){
            return true;
        }
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Heading')
                ->description('')
                ->schema([
                    
             TextInput::make('name'),
                ])
                // ->columns(2),
                ]);
        
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('name'),
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
            'index' => Pages\ListSpiritualGifts::route('/'),
            'create' => Pages\CreateSpiritualGift::route('/create'),
            'edit' => Pages\EditSpiritualGift::route('/{record}/edit'),
        ];
    }    
}
