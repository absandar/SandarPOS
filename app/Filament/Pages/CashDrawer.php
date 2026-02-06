<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

class CashDrawer extends Page
{
    protected string $view = 'filament.pages.cash-drawer';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBanknotes;

    public static function getNavigationLabel(): string
    {
        return static::$navigationLabel ??
            static::$title ??
            __('pos.cash_drawer');
    }
    public function getTitle(): string | Htmlable
    {
        return static::$title ?? __('pos.cash_drawer');
    }
}
