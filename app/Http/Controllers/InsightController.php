<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsightController extends Controller
{
    //

    public function index()
    {
        $data['page_title'] = "Insights";
        return view('insight.index', $data);
    }

    public function getFullInsight($id)
    {
        if($id == 'real-estate'){
            $title = 'Real Esate Sector Details';
        }elseif($id == 'oil-and-gas'){
            $title = "Oil and Gas Sector Details";
        }elseif($id == 'crypto-currency'){
            $title = 'Crypto Currency Sector Details';
        };
        $data['page_title'] = $title;
        return view('insight.details', $data);

    }

    public function getFullSector()
    {
        $data['page_title'] = "Sectors Details";
        return view('insight.sector-details', $data);

    }
}
