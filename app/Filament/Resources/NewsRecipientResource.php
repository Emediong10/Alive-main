<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsRecipientResource\Pages;
use App\Filament\Resources\NewsRecipientResource\RelationManagers;
use App\Models\MemberType;
use App\Models\NewsRecipient;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
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

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

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
                Section::make('NewsRecipient')->schema([
                    Select::make('news_id')->relationship('news','title')->searchable()->preload(),
                    Select::make('recipient_type')->options([
                        '1'=>'Individual',
                        '2'=>'Group'
                    ])->reactive(),
                    Select::make('recipients')->options(function(callable $get){
                          $type=$get('recipient_type');
                          if($type==1)
                          { 
                            return User::all()->pluck('name','id');
                          }
                          elseif($type==2)
                          {
                            return MemberType::all()->pluck('type','id');
                          }
                    })->multiple(),
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('news.title'),
                TextColumn::make('user.name'),
            ])
             ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
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
