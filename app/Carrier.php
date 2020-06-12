<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    //
    protected $fillable = [
        'id',
        'full_name',
        'email',
        'ID_card',
        'cv',
    ];
}
