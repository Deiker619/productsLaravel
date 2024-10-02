<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_shopping extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'products', 'description'];

    public function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function cart_shopping_item(){
        return $this->hasMany(cart_shopping::class, 'cart_shopping_id');
    }
    
}
