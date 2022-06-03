<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table= "animal";
    public $timestamps = false;

    public function kindModel(){
        return $this->belongsTo("\App\Models\KindOfAnimal","kind","kind");
    }
    public function images()
    {
     return $this->hasMany('App\Image', 'animal_id');
    }
}
