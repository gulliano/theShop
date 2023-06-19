<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    protected $fillable = ['product_id', 'user_id '] ;
    use HasFactory;
}
