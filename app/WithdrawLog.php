<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawLog extends Model
{
    protected $table = 'withdraw_logs';
    public $with = ['user','investment'];

    protected $fillable = ['user_id','transaction_id','method_id','amount','charge','send_details','message','status','net_amount','message','investment_id'];

    public function method()
    {
        return $this->belongsTo(WithdrawMethod::class,'method_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function investment()
    {
        return $this->belongsTo(Investment::class,'investment_id');
    }

}
