<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    function Author()
    {
        return $this->belongsTo('Author');
    }
    function gener()
    {
        return $this->belongsTo('Gener');
    }
    function review()
    {
        return $this->hasMany('Review');
    }
}
