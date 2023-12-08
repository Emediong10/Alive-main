<?php

namespace App\Filament\Resources\NewsRecipientResource\Pages;

use App\Filament\Resources\NewsRecipientResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsRecipient extends EditRecord
{
    protected static string $resource = NewsRecipientResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
