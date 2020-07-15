<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['name','image_url','price','location','description','slug'];
    public $with = ['property_galleries','property_features'];
    
    //

    public function property_galleries()
    {
        return $this->hasMany(PropertyGallery::class);
    }
    public function property_features()
    {
        return $this->hasMany(PropertyFeature::class);
    }
}
