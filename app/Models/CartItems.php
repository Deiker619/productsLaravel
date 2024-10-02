<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;
    protected $fillable = ['cart_shopping_id','product_id','cantidad'];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id' );
    }
    public function cart_shopping(){
        return $this->belongsTo(Cart_shopping::class, 'cart_shopping_id');
    }

}
