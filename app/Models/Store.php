<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

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
        $slug = optional(filament()->getTenant())->slug;

        return $slug ? 'http://localhost:8000/' . $slug : '';
    }
}
