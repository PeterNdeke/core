<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insight;
use App\SectorCategory;
use App\Sector;
class InsightController extends Controller
{
    //

    public function index()
    {
        $data['page_title'] = "Insights";
        $data['insights'] = Insight::orderBy('id', 'DESC')->paginate(12);
       
        return view('insight.index', $data);
    }

    public function getFullInsight($id)
    {
       
        $title = 'Insight Details';
        $data['item'] = Insight::where('slug', $id)->first();
        $data['page_title'] = $title;
        return view('insight.sector-details', $data);

    }

    public function getFullSector($id)
    {
        if($id == 'real-estate'){
            $data['page_title'] = 'Real Estate Sector';
            $data['sectors']  = SectorCategory::where('sector_name', $id)->orderBy('id', 'DESC')->get();
            return view('insight.details', $data);
        }elseif($id == 'oil-and-gas'){
            $data['page_title'] = 'Oil and Gas Sector';
            $data['sectors']  = SectorCategory::where('sector_name', $id)->orderBy('id', 'DESC')->get();
            return view('insight.details', $data);
        }elseif($id == 'crypto-currency'){
            $data['page_title'] = 'Crypto Currency Sector';
            $data['sectors']  = SectorCategory::where('sector_name', $id)->orderBy('id', 'DESC')->get();
            return view('insight.details', $data);
        }
       
    }

    public function getSectors()
    {
        $data['page_title'] = 'Sectors';
        $data['sectors'] = Sector::orderBy('id', 'ASC')->get();
        return view('site.sectors', $data);

    }
}
