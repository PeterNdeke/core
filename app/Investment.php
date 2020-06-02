<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $table = 'investments';

    protected $guarded = [''];
    protected $with = ['plan'];
    protected $appends = ['withdrawable','percentage'];

    public function plan()
    {
        return $this->belongsTo(Plan::class,'plan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    // $data['withdrawable_amount'] = Investment::where('user_id', auth()->id())->sum('withdrawable_amount');
    // $totalAmountPaid = Investment::where('user_id', auth()->id())->value('amount');
    // $data['withdrawable'] = $totalAmountPaid * 10 / 100;
    public function getWithdrawableAttribute()
    {

        return $this->withdrawable_amount;

    }

    public function getPercentageAttribute()
    {

        return round($this->amount * ($this->plan->percent / $this->plan->time) / 100, 2);

    }



}
