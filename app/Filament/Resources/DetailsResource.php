<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Details;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DetailsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DetailsResource\RelationManagers;

class DetailsResource extends Resource
{
    protected static ?string $model = Details::class;

    protected static function shouldRegisterNavigation(): bool
    {
        if(auth()->user()->hasRole(['admin'])){
            return true;
        }
        return false;
    }

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('course_of_study'),
                TextInput::make('degree'),
                TextInput::make('occupation'),
                TextInput::make('professional_abilities'),
                TextInput::make('past_mission'),
                TextInput::make('area_of_interest'),
                TextInput::make('spiritual_gift'),
                TextInput::make('skills'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.firstname')->label('Firstname')->searchable(),
                TextColumn::make('user.middlename')->label('Middlename')->searchable(),
                TextColumn::make('user.lastname')->label('Lastname')->searchable(),
                TextColumn::make('user.dob')->label('Date of Birth')->searchable(),
                TextColumn::make('user.email')->label('Email')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListDetails::route('/'),
            'edit' => Pages\EditDetails::route('/{record}/edit'),
        ];
    }    
}
