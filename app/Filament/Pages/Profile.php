<?php

namespace App\Filament\Pages;

use App\Models\Details;
use Filament\Pages\Page;
use Filament\Pages\Actions\Action;

class Profile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.profile';

    protected static function shouldRegisterNavigation(): bool
    {
        if(auth()->user()->hasRole(['admin'])){
            return false;
        }
        return true;
    }

    protected function getActions(): array
    {
        return [
            Action::make('update')
            ->label('Update profile')
            ->icon('heroicon-s-pencil')
            ->url('update-profile')
        ];
    }
}
