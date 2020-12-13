<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{

    protected $fillable = [
        'name', 'description', 'category_id', 'price', 'stock', 'order_count', 'image', 'created_at', 'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
