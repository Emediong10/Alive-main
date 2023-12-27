<?php

namespace App\Filament\Resources\DetailsResource\Pages;

use App\Filament\Resources\DetailsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetails extends EditRecord
{
    protected static string $resource = DetailsResource::class;

    protected function getActions(): array
    {
        return [
           //
        ];
    }
}
