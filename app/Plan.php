<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
    protected $appends = ['expire'];

    protected $fillable = ['name','min_units','image','max_units','time','remaining_units',
    'percent','compound_id','status', 'description','sector_name','duration','price','available_units','slug'];
   
   // protected $guarded = [''];

    public function compound()
    {
        return $this->belongsTo(Compound::class,'compound_id');
    }
    public function getExpireAttribute()
    {
        
        if ($this->remaining_units > 0 || $this->status == 1) {
            return true;
        }
        return false;

    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
    


}
