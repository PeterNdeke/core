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
       $invest = Investment::where('days_left', 0 )->get();

       

       
      
       foreach ($invest as $key => $value) {

        $dueDate = strtotime($value->due_date); // or your date as well
        $startDate = time();
        $datediff = $dueDate - $startDate;

        $earlier = new \DateTime(date('Y-m-d'));
       $later = new \DateTime($value->due_date);

       $diff = $later->diff($earlier)->format("%a");

       
       
        //    $plan = Plan::find($value->plan_id);
          
        //    $durationDay = $plan->time * 30;

           
        //     $startDate = date_format($value->created_at,'Y-m-d');
        //    // echo date('Y-m-d', strtotime($Date. ' + 2 days'));
        //     $dueDate = date('Y-m-d', strtotime($startDate. "+$durationDay days"));

            // $now = new \DateTime($dueDate);
            // $ref = new \DateTime($startDate);
            // $diff = $now->diff($ref);
            // dd($diff['days']);
           
            Investment::where('id', $value->id)->update([
               'days_left' => $diff
              
            ]);
       }

       
    }
}
