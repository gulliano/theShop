<?php

namespace App\Models;

use App\Models\User;
use App\Models\Favoris;
use App\Models\Category;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $fillable = ['category_id', 
                            'user_id',
                            'name', 
                            'description',
                            'prix',
                            'defaultImage',
                            'carouselImage' ] ;
    use HasFactory;

    protected $casts = [
        'carouselImage' => 'array',
    ];

   /**
    * Get the user that owns the Product
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
 

   public function category(): BelongsTo
   {
       return $this->belongsTo(Category::class);
   }

   public function commentaires(): HasMany
   {
       return $this->hasMany(Commentaire::class);
   }

   public function favoris(): HasMany
   {
       return $this->hasMany(Favoris::class);
   }

   public function user(): BelongsTo
   {
       return $this->belongsTo(User::class);
   }
}
