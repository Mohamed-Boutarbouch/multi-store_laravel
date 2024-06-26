<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Filament\Models\Contracts\HasCurrentTenantLabel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Store extends Model implements HasCurrentTenantLabel
{
    use HasFactory;

    protected $keyType = 'string';

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->id = Str::ulid();
        });
    }

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

        return $slug ? '/' . auth()->user()->username . '/' . $slug : '';
    }
}
