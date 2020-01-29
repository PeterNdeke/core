<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insight;

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

    public function getFullSector()
    {
        $data['page_title'] = "Sectors Details";
        return view('insight.sector-details', $data);

    }
}
