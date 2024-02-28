<?php

namespace App\Filament\Pages;

use App\Filament\Resources\NewsResource;
use App\Models\News;
use App\Models\NewsRecipient;
use Closure;
use Filament\Pages\Page;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Page implements HasTable
{
    use InteractsWithTable;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    protected static string $view = 'filament.pages.inbox';

    protected function getTableQuery() :Builder
    {
        if(auth()->user()->hasRole(['admin']))
        {
              return News::query()->latest();
        }
        else
        {
            return News::query()->whereHas('recipient', function($query){
                return $query->where('user_id',Auth::user()->id);
            })->latest();
            
        }
        
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('title')->searchable()
        ];
    }

    protected function getTableRecordUrlUsing(): ?Closure
    {
        return fn (Model $record): string => NewsResource::getUrl('edit',['record'=>$record]);
    }
}
