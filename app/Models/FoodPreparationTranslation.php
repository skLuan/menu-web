<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FoodPreparationTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name', 'description'];

    public function dish(): BelongsTo
    {
        return $this->belongsTo(FoodPreparation::class, 'id','food_preparation_id');
    }
}
