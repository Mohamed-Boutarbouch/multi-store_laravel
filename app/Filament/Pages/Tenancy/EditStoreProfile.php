<?php

namespace App\Filament\Pages\Tenancy;

use App\Rules\UniqueStoreSlugForUser;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;

class EditStoreProfile extends EditTenantProfile
{
    public static function getLabel(): string
    {
        return 'Store profile';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('slug')
                    ->rules([new UniqueStoreSlugForUser(auth()->user())]),
            ]);
    }
}
