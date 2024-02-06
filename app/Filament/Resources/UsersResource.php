<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use App\Models\Chapter;
use App\Models\MemberType;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UsersResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UsersResource\RelationManagers;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

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
                TextInput::make('firstname'),
                TextInput::make('middlename'),
                TextInput::make('lastname'),
                TextInput::make('email'),
                TextInput::make('phone')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('firstname')->searchable(),
                TextColumn::make('middlename')->searchable(),
                TextColumn::make('lastname')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone')->searchable(),
                TextColumn::make('gender')->searchable(),
                TextColumn::make('chapter.name')->sortable()->searchable(),
                TextColumn::make('member_type.type')->sortable()->searchable(),
                TextColumn::make('created_at')->sortable()->searchable(),
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
            // UserRelationManager::class,
         RelationManagers\MemberTypeRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
           
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }
}
