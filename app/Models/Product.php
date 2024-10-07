<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nameProduct', 'price', 'category_id', 'description'];

    public function categories(){
        return $this->hasMany(Category::class, 'category_id');
    }
    public function cart_shopping_item(){
        return $this->hasMany(CartItems::class, 'product_id');
    }
}
