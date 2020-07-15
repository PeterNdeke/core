<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insight;
use App\SectorCategory;
use App\Sector;
use App\Plan;
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
        if($id == 'real-estate-sector'){
            $data['page_title'] = 'Real Estate Sector';
            $sectorID = Sector::where('slug', $id)->value('id');
            $data['sectors'] = Plan::where('sector_id', $sectorID)->get();
            return view('insight.details', $data);
        }elseif($id == 'oil-and-gas-sector'){  
            $data['page_title'] = 'Oil and Gas Sector';
            $sectorID = Sector::where('slug', $id)->value('id');
            $data['sectors'] = Plan::where('sector_id', $sectorID)->get();
            return view('insight.details', $data);
        }elseif($id == 'agricultural-sector'){
            $data['page_title'] = 'Agricultural Sector';
            $sectorID = Sector::where('slug', $id)->value('id');
            $data['sectors'] = Plan::where('sector_id', $sectorID)->get();
            return view('insight.details', $data);
        }elseif($id == 'capital-market'){
            $data['page_title'] = 'Capital Market';
            $sectorID = Sector::where('slug', $id)->value('id');
            $data['sectors'] = Plan::where('sector_id', $sectorID)->get();
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
