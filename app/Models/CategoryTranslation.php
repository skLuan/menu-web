<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;;

class CategoryTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name'];

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class,'id','category_id');
    }
}
