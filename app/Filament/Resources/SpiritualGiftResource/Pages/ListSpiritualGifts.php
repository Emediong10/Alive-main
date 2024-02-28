<?php

namespace App\Filament\Resources\SpiritualGiftResource\Pages;

use App\Filament\Resources\SpiritualGiftResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpiritualGifts extends ListRecords
{
    protected static string $resource = SpiritualGiftResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
