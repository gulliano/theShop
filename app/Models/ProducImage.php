<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProducImage extends Model
{
    protected $fillable = ['product_id', 'position', 
    'image'] ;
    use HasFactory;
}
