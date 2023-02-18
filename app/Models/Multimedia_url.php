<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia_url extends Model
{
    use HasFactory;
    public function dish()
    {
        return $this->belongsTo(Dishes::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
