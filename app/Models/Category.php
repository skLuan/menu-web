<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function multimedia()
    {
        return $this->hasMany(Multimedia_url::class);
    }
    public function dishes()
    {
        return $this->hasMany(Dishes::class);
    }
}