<?php

namespace App\Filament\Resources\UsersResource\Pages;

use Actions\Action;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\UsersResource;
use Illuminate\Validation\Rules\Password;

class EditUsers extends EditRecord
{
    protected static string $resource = UsersResource::class;

    protected function getActions(): array
    {
        return [
           Actions\Action::make('ChangePassword')
            ->form([
            TextInput::make('new_password')
            ->password()
            ->label('New Password')
            ->required()
            ->rule(Password::default()),

           

            TextInput::make('new_password_confirmation')
            ->password()
            ->label('Confirm New Password')
            ->same('new_password')
            ->required()
            ->rule(Password::default())

            ])

            ->action(function (array $data){
                $this->record->update([
                    'password' => Hash::make($data['new_password'])
                ]);
                $this->notify('Success', 'Password Updated Successfully');
            })


           
        ];
    }
}
