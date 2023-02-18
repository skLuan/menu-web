<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function icon(): HasOne
    {
        return $this->hasOne(Multimedia_url::class, 'id', 'icon_multimedia_url');
    }
    public function image(): HasOne
    {
        return $this->hasOne(Multimedia_url::class, 'id', 'image_multimedia_url');
    }

    public function dishes()
    {
        return $this->hasMany(Dishes::class);
    }
}
