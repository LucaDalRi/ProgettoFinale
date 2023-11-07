<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    protected $fillable = ['restaurant_id', 'name', 'description', 'ingredients', 'photo', 'visible', 'price'];
    public function orders(){
        return $this->belongsToMany(Order::class);
    }
}
