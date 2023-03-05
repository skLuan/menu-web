<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Category extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['name'];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */


    public function translations(): HasMany
    {
        return $this->hasMany(CategoryTranslation::class,'category_id', 'id');
    }

    public function multimedia(): BelongsToMany
    {
        return $this->belongsToMany(Multimedia_url::class, 'categories_multimedia_urls');
    }
    public function icon(): BelongsToMany
    {
        return $this->belongsToMany(Multimedia_url::class, 'categories_multimedia_urls');
    }


    public function foodPreparations(): HasMany
    {
        return $this->hasMany(FoodPreparation::class);
    }
}
