<?php

namespace App\Filament\Resources\NewsRecipientResource\Pages;

use App\Filament\Resources\NewsRecipientResource;
use App\Models\NewsRecipient;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateNewsRecipient extends CreateRecord
{
    protected static string $resource = NewsRecipientResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }


    protected function handleRecordCreation(array $data): Model
    {
        
        $models = [];
        if($data['recipient_type']==1)
        {
            foreach($data['recipients'] as $recipient)
            {
                $model=static::getModel()::create([
                    'news_id'=>$data['news_id'],
                    'is_group'=>0,
                    'member_types_id'=>null,
                    'user_id'=>$recipient
                ]);
                $models[]=$model;
            }
        }
        elseif($data['recipient_type']==2)
        {
            foreach($data['recipients'] as $recipient)
            {
                $model=static::getModel()::create([
                    'news_id'=>$data['news_id'],
                    'is_group'=>1,
                    'member_types_id'=>$recipient,
                    'user_id'=>null
                ]);
            }
        }
        //dd($models);
        return $model;
    }
}
