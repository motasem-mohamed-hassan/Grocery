<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'full_name', 'phone', 'address', 'city', 'address_type', 'total', 'status',  'created_at', 'updated_at',
   ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity', 'total');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
