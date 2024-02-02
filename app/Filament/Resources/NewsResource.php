<?php

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use App\Models\News;
use App\Models\User;
use Filament\Tables;
use App\Models\MemberType;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\ViewAction;

use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\NewsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;
use App\Filament\Resources\NewsResource\RelationManagers;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

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
                Section::make('View Application')->schema([
                    TextInput::make('title')->required()->disabledOn('edit')->afterStateUpdated(function (Callable $get, Closure $set, $state) {
                        $set('slug', Str::slug($state));
                     })
                    ->debounce('500ms')
                    ->label('News Title'),
                    TextInput::make('slug'),
                    RichEditor::make('content')->label('content'),
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
                    Toggle::make('active')->label('active')

         ])
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
               // TextColumn::make('content')->searchable(),
                TextColumn::make('active')->searchable()
            ])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            // ->actions([
            //     Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                
            ]);
    }
    
    

    public static function getRelations(): array
    {
        return [
            RelationManagers\UserRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'view' => Pages\ViewNews::route('/{record}'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }

   
}
