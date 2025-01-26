<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'title',
            'price',
            'review',
            'description',
            'size_id',
            'category_id',
            'weight',
            'dimensions',
            'color_id',
            'material'
        ];


    public function color():BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }


    public function size():BelongsToMany
    {
        return $this->belongsToMany(Size::class);
    }

    public function category():BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
