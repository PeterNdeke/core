<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    //
    protected $fillable = ['name','image_url','price','location','description','slug', 'sector_id','duration','interest_percent', 'published','available_units','remaining_units'];
    public $with = ['market_images','sector'];
    protected $appends = ['expire'];

    public function market_images()
    {
        return $this->hasMany(MarketImage::class);
    }
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
    public function getExpireAttribute()
    {
        
        if ($this->remaining_units > 0 ) {
            return true;
        } 
       return false;
       

    }
}
