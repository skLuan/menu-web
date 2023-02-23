<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Multimedia_type extends Model
{
    use HasFactory;

    public function multimedia(): HasMany
    {
        return $this->hasMany(Multimedia_url::class, 'multimedia_type_id', 'id');
    }
}
