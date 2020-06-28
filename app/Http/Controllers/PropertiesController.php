<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    //

    public function index()
    {
        $data['page_title'] = 'Properties';
        return view('site.properties', $data);
    }
}
