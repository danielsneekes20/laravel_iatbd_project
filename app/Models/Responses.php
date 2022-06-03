<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responses extends Model
{
    protected $table= "responses";
    public $timestamps = false;

    // public function kindModel(){
    //     return $this->belongsTo("\App\Models\KindOfAnimal","kind","kind");
    // }
}
