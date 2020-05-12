<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
    protected $appends = ['expire'];
    protected $with =['sector'];

    protected $fillable = ['name','min_units','image','max_units','time','remaining_units',
    'percent','compound_id','status', 'description','sector_id','duration','price','available_units','slug','remaining_units_percent','plan_type'];
   
   // protected $guarded = [''];

    public function compound()
    {
        return $this->belongsTo(Compound::class,'compound_id');
    }
    public function getExpireAttribute()
    {
        
        if ($this->remaining_units > 0 && $this->closes == null) {
            return true;
        } 
       return false;
       

    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function essentials()
    {
        return $this->hasMany(Essential::class);
    }
    


}
