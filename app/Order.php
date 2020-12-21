<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class,  'order_products');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
