<?php

namespace App\Filament\Resources\UsersResource\Pages;

use App\Models\User;
use Filament\Pages\Actions;
use Illuminate\Support\Str;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Redirect;
use App\Filament\Resources\UsersResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUsers extends CreateRecord
{
    protected static string $resource = UsersResource::class;

    protected static string $view = 'filament.pages.create-user';

    // public function mount(): void
    // {
    //     $this->form->fill([
    //         'default' => Str::random(10)
    //     ]);
    // //     abort_unless(auth()->user()->hasRole('admin'), 403);
    // }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Member registered')
            ->body('You have successfully added a group member');
    }

    protected function getFormSchema(): array
    {
        return [
            Card::make()
                ->schema([
                    TextInput::make('name')
                    ->required(),
                    TextInput::make('email')
                    ->email()
                    ->required(),
                    TextInput::make('default')
                    ->label('Default password')
                    ->disabled()
                ])
                ->columns(2),
        ];
    }

    // public function submit()
    // {
    //     dd($this->form->getState());
    //     $user = User::where('id',auth()->user()->id)->first();
    //     $data = $this->form->getState();
    //     $password = Hash::make($data['password']);
    //     $default = $data['password'];
    //     $data['password'] = $password;
    //     $data['default'] = $default;
    //     $data['group_id'] = $user->group_id;
    //     // $data['department_id'] = $user->department_id;
    //     // dd($data);
    //     $user_data = User::create($data);
    //     $user_data->assignRole('student');
    //     Notification::make()
    //     ->success()
    //     ->title('Successful')
    //     ->body('You have successfully added a group member')
    //     ->send();
    //     return Redirect::to($this->getResource()::getUrl('index'));
    // }
}
