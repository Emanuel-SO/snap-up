<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    public function productimages(){
        return $this->hasMany(Productimage::class);
    }

    public function productimages_last(){
        return $this->hasOne(Productimage::class)->latestOfMany();
    }
}
