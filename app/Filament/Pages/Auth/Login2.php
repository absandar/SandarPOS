<?php
namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Filament\Auth\Pages\Login as BaseLogin;

class Login2 extends BaseLogin
{
    // Override the email component to use username
    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('username')
            ->label(__('username.username'))
            ->required()
            ->autocomplete()
            ->autofocus();
    }

    // Return credentials with username instead of email
    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'username' => $data['username'],
            'password' => $data['password'],
        ];
    }
}
