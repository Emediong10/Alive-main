<?php

namespace App\Filament\Resources\NewsResource\Pages;

use App\Filament\Resources\NewsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNews extends ListRecords
{
    protected static string $resource = NewsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->visible(function(){
                if(auth()->user()->hasRole('admin',)){
                    return true;
                }else{
                    return false;
                }
            }),
        ];
    }
}
// https://drive.google.com/uc?id=1XD2RERSd6yalqqoywzPv7N83XJ9aApsw&export=download
