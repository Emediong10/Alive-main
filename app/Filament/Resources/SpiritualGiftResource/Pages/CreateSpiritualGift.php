<?php

namespace App\Filament\Resources\SpiritualGiftResource\Pages;

use App\Filament\Resources\SpiritualGiftResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSpiritualGift extends CreateRecord
{
    protected static string $resource = SpiritualGiftResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
