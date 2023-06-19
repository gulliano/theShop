<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    protected $fillable = [ 'name' , 'icon'] ;

    use HasFactory;

     public function products(): HasMany
     {
         return $this->hasMany(Product::class);
     }
     
}
