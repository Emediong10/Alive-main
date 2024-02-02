<?php

namespace App\Filament\Resources\NewsResource\Pages;

use App\Filament\Resources\NewsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{

    protected function getActions(): array
    
    {
        return [
            Actions\DeleteAction::make()
            ->visible(function(){
                if(auth()->user()->hasRole('admin')){
                    return true;
                }else{
                    return false;
                }
            }),
            
        ];
    }
    protected static string $resource = NewsResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }


}
