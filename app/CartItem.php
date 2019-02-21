<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['product_id', 'cart_id', 'quantity'];
    // protected $primaryKey = ['cart_id', 'product_id'];

    public $incrementing = false;

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
