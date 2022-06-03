<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userImage extends Model
{
    protected $table = 'user_image';
    protected $fillable = [
        'url', 'user_id'
       ];

    public function image()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
