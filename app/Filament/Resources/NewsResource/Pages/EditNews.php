<?php

namespace App\Filament\Resources\NewsResource\Pages;

use App\Filament\Resources\NewsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNews extends EditRecord
{
    protected static string $resource = NewsResource::class;

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
 protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

}
