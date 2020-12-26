<?php

namespace App;

use App\Image;
use App\Order;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name', 'description', 'category_id', 'price', 'stock', 'order_count', 'image', 'created_at', 'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function first_image()
    {
        return $this->hasOne(Image::class);
    }

}
