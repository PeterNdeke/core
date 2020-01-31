<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Investment;
use App\Plan;

class UpdateInvestment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:investment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       $invest = Investment::where('due_date', null )->where('start_date', null)->get();
      
       foreach ($invest as $key => $value) {
           $plan = Plan::find($value->id);
           $durationDay = $plan->time * 30;
            $startDate = date_format($value->created_at,'Y-m-d');
           // echo date('Y-m-d', strtotime($Date. ' + 2 days'));
            $dueDate = date('Y-m-d', strtotime($startDate. "+$durationDay days"));

            // $now = new \DateTime($dueDate);
            // $ref = new \DateTime($startDate);
            // $diff = $now->diff($ref);
            // dd($diff['days']);
           
            Investment::where('id', $value->id)->update([
               'due_date' => $dueDate,
               'start_date' => $startDate
            ]);
       }

       
    }
}
