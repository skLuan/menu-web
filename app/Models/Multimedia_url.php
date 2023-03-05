<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Multimedia_url extends Model
{
    use HasFactory;

    public function fPreparations(): BelongsToMany
    {
        return $this->belongsToMany(FoodPreparation::class, 'food_preparations_multimedia_urls');
    }

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'categories_multimedia_urls');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Multimedia_type::class, 'id', 'multimedia_type_id');
    }
}
