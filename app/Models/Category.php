<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
    use HasFactory;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        // 'icon_multimedia_id' => 0,
        // 'image_multimedia_id' => 0,
    ];

    public function multimedia(): BelongsToMany
    {
        return $this->belongsToMany(Multimedia_url::class, 'categories_multimedia_urls');
    }


    public function foodPreparations(): HasMany
    {
        return $this->hasMany(FoodPreparation::class);
    }
}
