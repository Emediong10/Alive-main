<?php

namespace App\Filament\Resources\AreaInterestResource\Pages;

use App\Filament\Resources\AreaInterestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAreaInterests extends ListRecords
{
    protected static string $resource = AreaInterestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
