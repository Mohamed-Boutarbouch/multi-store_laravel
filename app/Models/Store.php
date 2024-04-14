<?php

namespace App\Models;

use Filament\Models\Contracts\HasCurrentTenantLabel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Store extends Model implements HasCurrentTenantLabel
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function getCurrentTenantLabel(): string
    {
        return 'Current store';
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public static function getStoreUrl(): string
    {
        $slug = filament()->getTenant()?->slug;

        return $slug ? url('/') . '/' . auth()->user()->username . '/' . $slug : '';
    }
}
