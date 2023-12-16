<?php

namespace App\Filament\Resources;


use App\Filament\Resources\ApplicationResource\Pages;
use App\Filament\Resources\ApplicationResource\RelationManagers;
use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;


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
                Section::make('View Application')->schema([
                   
                   
                    Select::make('member_type_id')->relationship('member_type','type')->required(),
                    Toggle::make('status')->label('Review Completed'),
                    Repeater::make('answers')->schema([
                        TextInput::make('monthly_outreach')->label('I personally do active outreach monthly (not just church work):')->disabledOn('edit'),
                        
                        TextInput::make('professional')->label('I am a professional:')->disabledOn('edit'),
                       
                        TextInput::make('will_support')->label('I desire to support ALIVE-Nigeria ministry with at least monthly:')->disabledOn('edit'),
                        TextInput::make('monthly_support')->label('Do you intend to support the ministry of ALIVE Nigeria on a monthly basis?')->disabledOn('edit'),
                        TextInput::make('monthly_amount')->label('Specify Amount you intend to Support Alive Nigeria with')->disabledOn('edit'),
                        TextInput::make('currency')->label('Specify the currency')->disabledOn('edit'),
                    ])->columnSpan(2)->columns(2)->disableItemCreation()
                    ->disableItemDeletion()
                    ->disableItemMovement()->label('Answers to Questions'),
                ])->columns(2)

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
                    TextColumn::make('user.phone')->label('phone')->searchable(),
                    TextColumn::make('user.gender')->label('Gender')->searchable(),
                TextColumn::make('status')->getStateUsing(function($record){
                    if($record->status==0 || $record->status==null)
                    {
                        return "Pending Review ...";
                    }
                    else
                    {
                        return "Reviewed";
                    }
                })->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->label('Review'),
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
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }
}
