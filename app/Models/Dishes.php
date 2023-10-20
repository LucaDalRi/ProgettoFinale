<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dishes extends Model
{
    use HasFactory;
    protected $table = 'disches';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'ingredients', 'visible', 'price'];
}
