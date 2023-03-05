<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
class FoodPreparation extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name', 'description'];
    // protected $fillable = ['author'];

    public function translations(): HasMany
    {
        return $this->hasMany(FoodPreparationTranslation::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function multimedia(): BelongsToMany
    {
        return $this->belongsToMany(Multimedia_url::class, 'food_preparations_multimedia_urls');
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
