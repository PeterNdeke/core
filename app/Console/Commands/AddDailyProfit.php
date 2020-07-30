<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Investment;
use App\Plan;
use App\Essential;
use App\Market;
// use App\Wallet;


class AddDailyProfit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'profit:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add daily earnings to investment';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    private function getDatesFromRange($start, $end, $format = 'Y-m-d')
    {

        // Declare an empty array
        $array = array();

        // Variable that store the date interval
        // of period 1 day
        $interval = new \DateInterval('P1D');

        $realEnd = new \DateTime($end);
        $realEnd->add($interval);

        $period = new \DatePeriod(new \DateTime($start), $interval, $realEnd);

        // Use loop to store date into array
        foreach ($period as $date) {
            $array[] = $date->format($format);
        }

        // Return the array elements
        return $array;
    }

    private function updateAccumulator($id, $lastAmount, $amountPaid)
    {
        $plan = Plan::find($id);
        
        $percent = $plan->percent;
       // $amount = $plan->price;
        $durationDays = $plan->time * 30;

        $profit = $amountPaid * $percent / 100;
        //$acumu = $profit + $amountPaid;
        $perDayProfit = $profit / $durationDays;
        // $perDayProfit = $profit / $durationDays;
        return $lastAmount + $perDayProfit;

    }

    private function updateAccumulator2($id, $lastAmount, $amountPaid)
    {
        $plan = Market::find($id);
        
        $percent = $plan->interest_percent;
       // $amount = $plan->price;
        $durationDays = $plan->duration * 30;

        $profit = $amountPaid * $percent / 100;
        //$acumu = $profit + $amountPaid;
        $perDayProfit = $profit / $durationDays;
        // $perDayProfit = $profit / $durationDays;
        return $lastAmount + $perDayProfit;

    }

    private function updateAccumulator1($id, $lastAmount, $amountPaid)
    {
        $plan = Essential::where('roi', $id)->first();
        
        $percent = $plan->roi;
       // $amount = $plan->price;
        $durationDays = $plan->plan->time * 30;

        $profit = $amountPaid * $percent / 100;
        //$acumu = $profit + $amountPaid;
        if ($percent == '6') {
            $perDayProfit = $profit / 30;
        } elseif($percent=='7.5') {
            $perDayProfit = $profit / 30;
           // $perDayProfit = $perDayProfit1 * 6;
        } elseif($percent == '8.4'){
            $perDayProfit = $profit / 30;
           // $perDayProfit = $perDayProfit1 * 12;
        }
        
       
        // $perDayProfit = $profit / $durationDays;
        return $lastAmount + $perDayProfit;

    }

    private function withdrawableAmount($id, $lastAmount, $unit, $amountPaid)
    {
        $plan = Plan::find($id);
       // $investment = Investment::find($investmentID);
        $percent = $plan->percent;
        //$amount = $food->price;
        $durationDays = $plan->duration_days;

        $profit = $amountPaid * $percent / 100;
        //$acumu = $profit * $unit;
        $perDayProfit = $profit / $durationDays;
        // $perDayProfit = $profit / $durationDays;
        return $lastAmount + $perDayProfit;

    }

    private function updateDaysLeft($daysLeft)
    {

        return $daysLeft - 1;
    }





    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public function handle()
    {
        //$today = date('Y-m-d');
        $detail = Investment::where('essential', NULL)->where('plan_id', '!=', NULL)->get();
       
           
        foreach ($detail as $key => $item) {
           
          
            foreach ($this->getDatesFromRange($item->start_date, $item->due_date) as $key => $value) {

                
                
                if ($value == date('Y-m-d') && $item->status == 0) {
                    Investment::where('id', $item->id)->update([
                        'acumulator' => $this->updateAccumulator($item->plan_id, $item->acumulator,$item->amount),
                        'updated_at' => now(),
                        'days_left' => $this->updateDaysLeft($item->days_left),
                        'withdrawable_amount' => $this->updateAccumulator($item->plan_id, $item->withdrawable_amount, $item->amount)
                    ]);
                }

                // Wallet::where('user_id',$item->user_id)->update([
                //    'balance' => $this->updateAccumulator($item->plan_id, $item->withdrawable_amount, $item->amount)
                // ]);

                if($item->days_left == "0"){
                    Investment::where('id', $item->id)->update([
                       'status' => 1,
                       'days_left' => 0
                    ]);
                }

            }
        }

        $details = Investment::where('essential','!=', NULL)->where('plan_id', '!=', NULL)->get();
       
           
        foreach ($details as $key => $item) {
           
          
            foreach ($this->getDatesFromRange($item->start_date, $item->due_date) as $key => $value) {

                
                
                if ($value == date('Y-m-d') && $item->status == 0) {
                    Investment::where('id', $item->id)->update([
                        'acumulator' => $this->updateAccumulator1($item->essential, $item->acumulator,$item->amount),
                        'updated_at' => now(),
                        'days_left' => $this->updateDaysLeft($item->days_left),
                        'withdrawable_amount' => $this->updateAccumulator1($item->essential, $item->withdrawable_amount, $item->amount)
                    ]);
                }

                // Wallet::where('user_id',$item->user_id)->update([
                //    'balance' => $this->updateAccumulator($item->plan_id, $item->withdrawable_amount, $item->amount)
                // ]);

                if($item->days_left == "0"){
                    Investment::where('id', $item->id)->update([
                       'status' => 1,
                       'days_left' => 0
                    ]);
                }

            }
        }

        $details = Investment::where('essential', NULL)->where('market_id', '!=', NULL)->get();
       
           
        foreach ($detail as $key => $item) {
           
          
            foreach ($this->getDatesFromRange($item->start_date, $item->due_date) as $key => $value) {

                
                
                if ($value == date('Y-m-d') && $item->status == 0) {
                    Investment::where('id', $item->id)->update([
                        'acumulator' => $this->updateAccumulator2($item->market_id, $item->acumulator,$item->amount),
                        'updated_at' => now(),
                        'days_left' => $this->updateDaysLeft($item->days_left),
                        'withdrawable_amount' => $this->updateAccumulator2($item->market_id, $item->withdrawable_amount, $item->amount)
                    ]);
                }

                // Wallet::where('user_id',$item->user_id)->update([
                //    'balance' => $this->updateAccumulator($item->plan_id, $item->withdrawable_amount, $item->amount)
                // ]);

                if($item->days_left == "0"){
                    Investment::where('id', $item->id)->update([
                       'status' => 1,
                       'days_left' => 0
                    ]);
                }

            }
        }

    }
}
