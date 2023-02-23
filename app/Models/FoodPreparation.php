<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FoodPreparation extends Model
{

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function multimedia(): BelongsToMany
    {
        return $this->belongsToMany(Multimedia_url::class);
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
