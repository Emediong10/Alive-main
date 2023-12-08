<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsRecipientResource\Pages;
use App\Filament\Resources\NewsRecipientResource\RelationManagers;
use App\Models\NewsRecipient;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsRecipientResource extends Resource
{
    protected static ?string $model = NewsRecipient::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
                Section::make('NewsRecipient, Type')->schema([
                    TextInput::make('type')->required()
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type'),
                TextColumn::make('news')->counts('news')->label('news')


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
            'index' => Pages\ListNewsRecipients::route('/'),
            'create' => Pages\CreateNewsRecipient::route('/create'),
            'edit' => Pages\EditNewsRecipient::route('/{record}/edit'),
        ];
    }
}
