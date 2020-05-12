<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Essential extends Model
{
    //
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
