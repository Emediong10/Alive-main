<?php

namespace App\Filament\Resources\SpiritualGiftResource\Pages;

use App\Filament\Resources\SpiritualGiftResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpiritualGift extends EditRecord
{
    protected static string $resource = SpiritualGiftResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
