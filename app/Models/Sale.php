<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = ['client_id', 'cart_id', 'total'];

    public function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function cart(){
        return $this->belongsTo(Cart_shopping::class , 'cart_id');
    }
}
