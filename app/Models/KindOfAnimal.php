<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KindOfAnimal extends Model
{
    protected $table= "kind_of_animal";

    public function allAnimals(){
       return $this-> hasMany('\App\Models\Animal',"kind","kind");
    }
}
