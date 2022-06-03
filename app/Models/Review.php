<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    protected $fillable = [
        'review', 'user_id'
       ];

    // public function review()
    // {
    //     return $this->belongsTo('App\Review', 'animal_id');
    // }
}
