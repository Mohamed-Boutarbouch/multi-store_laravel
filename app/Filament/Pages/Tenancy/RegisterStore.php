<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\Store;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;

class RegisterStore extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register store';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('slug'),
            ]);
    }

    protected function handleRegistration(array $data): Store
    {
        $store = Store::create($data);

        $store->members()->attach(auth()->user());

        return $store;
    }
}
