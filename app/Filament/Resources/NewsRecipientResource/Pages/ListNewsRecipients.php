<?php

namespace App\Filament\Resources\NewsRecipientResource\Pages;

use App\Filament\Resources\NewsRecipientResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsRecipients extends ListRecords
{
    protected static string $resource = NewsRecipientResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function mount(): void
    {
        abort_unless(auth()->user()->hasRole(['admin']), 403);
    }
}
