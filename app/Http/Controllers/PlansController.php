<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use App\BasicSetting;
use App\Essential;

class PlansController extends Controller
{

    public function index()
    {
        $data['page_title'] = "All Our Awesome Plans";
        $data['plans'] = Plan::where('status', 1)->where('plan_type',  NULL)->paginate(12);
        $data['essential_plan'] = Plan::where('plan_type','essential')->with(['essentials'])->first();
        return view('site.plans',$data);
    }

    public function getPlanDetails($id)
    {
        $data['page_title'] = "Plan Details";
        $data['item'] = Plan::where('slug', $id)->with(['essentials'])->first();
       // dd($data['item']);
        return view('site.plan-details',$data);

    }

    public function planDetails($id)
    {
        $data['page_title'] = "Plan Details";
        $data['basic_setting'] = BasicSetting::first();
        $data['item'] = Plan::where('slug', $id)->first();
        return view('user.plan-details',$data);
    }

    public function confirmation(Request $request)
    {
        $units = $request->units;
        $percent = $request->percent;
        $planType = $request->plan_type;
        $slug = $request->slug;
        $item = Plan::where('slug', $slug)->first();
        $price = $request->price;
        $totalPrice = $price * $units;
       
        $totalReturns = $totalPrice * $percent / 100;
        $totalPayout = $totalPrice + $totalReturns;
        $page_title = "Plan Details";

        

        if ($units > $item->max_units) {
            return back()->with([
                'flash_error' => "Your Selected Units is more than the required Maximum units of $item->max_units",
            ]);
        }
        if ($units < $item->min_units) {
            return back()->with([
                'flash_error' => "Your Selected Units is not up to the required Minimum units of $item->min_units",
            ]);
        }
        if ($planType == 'essential') {
            $essential = Essential::find($percent);
           
            $totalReturns = $totalPrice * $essential->roi / 100;
            $totalPayout = $item->time * $totalReturns;
            return view('site.plan-details', compact('item', 'essential','totalPrice', 'totalPayout', 'totalReturns', 'units','page_title'));
           
        }
        return view('site.plan-details', compact('item', 'totalPrice', 'totalPayout', 'totalReturns', 'units','page_title'));

    }

    public function confirmation2(Request $request)
    {
        $units = $request->units;
        $percent = $request->percent;
        $price = $request->price;
        $totalPrice = $price * $units;
        $totalReturns = $totalPrice * $percent / 100;
        $totalPayout = $totalPrice + $totalReturns;
        $page_title = "Plan Details";
        $basic_setting = BasicSetting::first();

        $slug = $request->slug;
        $item = Plan::where('slug', $slug)->first();

        if ($units > $item->max_units) {
            return back()->with([
                'flash_error' => "Your Selected Units is more than the required Maximum units of $item->max_units",
            ]);
        }
        if ($units < $item->min_units) {
            return back()->with([
                'flash_error' => "Your Selected Units is not up to the required Minimum units of $item->min_units",
            ]);
        }
        return view('user.plan-details', compact('item', 'totalPrice', 'totalPayout', 'totalReturns', 'units','page_title','basic_setting'));

    }
}
