<?php

namespace App\Filament\Resources\MissionResource\Pages;

use App\Filament\Resources\MissionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMission extends EditRecord
{
    protected static string $resource = MissionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
