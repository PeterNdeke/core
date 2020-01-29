<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insight extends Model
{
    protected $fillable = [
        'id',
        'author',
        'title',
        'description',
        'image_url',
        'slug'
        
    ];
}
