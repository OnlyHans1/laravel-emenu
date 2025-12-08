<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Register as BaseRegister;

class Register extends BaseRegister 
{
    protected function getForms():array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getLogoFormComponents(),
                        $this->getNameFormComponents(),
                        $this->getUsernameFormComponents(),
                        $this->getEmailFormComponents(),
                        $this->getPasswordFormComponents(),
                        $this->getPasswordConfirmationFormComponents(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getLogoFormComponents(): Component
    {
        return FileUpload::make('logo')
            ->label('Logo Toko')
            ->image()
            ->required();
    }

    protected function getUsernameFormComponent(): Component
    {
        return TextInput::make('username')
            ->label('Username')
            ->hint('Minimal 5 karakter. Tidak boleh ada spasi.')
            ->required()
            ->minLength(5)
            ->unique($this->getUserModel());
    }
}
