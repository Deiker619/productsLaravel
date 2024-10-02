<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected  $fillable = ['cedula', 'name', 'last_name'];

    public function sale(){
        return $this->hasMany(Sale::class, 'client_id');
    }
    public function cart_shopping(){
        return $this->hasMany(cart_shopping::class, 'client_id');
    }
    
}
