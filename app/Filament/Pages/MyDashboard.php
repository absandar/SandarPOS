<?php

namespace App\Filament\Pages;
use Filament\Pages\Dashboard;

class MyDashboard extends Dashboard
{
    /**
     * @return array<class-string<Widget> | WidgetConfiguration>
     */
    public function getWidgets(): array
    {
        return [];
    }
}