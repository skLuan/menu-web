<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Multimedia_url extends Model
{
    use HasFactory;

    public function dish()
    {
        return $this->belongsTo(Dishes::class);
    }
    public function icon(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'icon_multimedia_id', 'id');
    }
    public function image() : BelongsTo
    {
        return $this->belongsTo(Category::class, 'image_multimedia_id', 'id');
    }
}
