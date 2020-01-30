<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectorCategory extends Model
{
    protected $fillable = [
        'id',
        'sector_name',
        'category_name',
        'description',
        'min_amount',
        'max_amount',
        'duration',
        'percentage',
        'image_url',
        'slug'
        
    ];
    
}
