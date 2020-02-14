<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'description',
        'image_url',
        'slug'
        
    ];
    

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
}
