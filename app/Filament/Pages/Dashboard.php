<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\NewsWidget;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.dashboard';

    protected function getWidgets(): array
    {
        // return Filament::getWidgets();
        return [
            NewsWidget::class,

        ];
    }

    protected function getColumns(): int | array
    {
        return 3;
    }

    protected function getTitle(): string
    {
        return static::$title ?? __('filament::pages/dashboard.title');
    }
}
