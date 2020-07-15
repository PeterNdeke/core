<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertiesController extends Controller
{
    //

    public function index()
    {
        $data['page_title'] = 'Properties';
        $data['properties'] = Property::get();
        return view('site.properties', $data);
    }

    public function getDetails($slug)
    {
        $data['page_title'] = 'Property Details';
        $data['details'] = Property::where('slug', $slug)->first();
       // dd($data['details']);
        return view('site.property-details', $data);
    }
}
