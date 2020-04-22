<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';
    protected $with =['user'];
    protected $guarded = [''];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
