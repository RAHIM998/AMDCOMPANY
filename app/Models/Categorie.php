<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
    use SoftDeletes, HasFactory ;

    protected $fillable = [
        'nom',
        'description',
    ];


    public function produit():HasMany
    {
        return $this->hasMany(Produit::class);
    }
}
