<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use App\Market;
use App\Sector;

class MarketController extends Controller
{
    protected static $folder = 'admin.market.';
    protected static $link = 'admin/markets';
    protected static $mainTitle = 'Available Markets';
    protected static $message = 'Product posted successfully';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = 'All Available Markets';
        $markets = Market::orderBy('id', 'DESC')->paginate(10);
        return view(self::$folder . 'index', compact('markets','page_title'))->withTitle(self::$mainTitle)->with(['link' => self::$link]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "New Market";
        $sectors = Sector::all();
        return view(self::$folder . 'add', compact('page_title','sectors'))->withTitle(self::$mainTitle)->with('link', self::$link);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //
        //dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'price' => 'required',
            'image_url' => 'required|max:10000|mimes:png,jpeg,jpg',
            'description' => 'required',
            'available_units' => 'required',
            'interest_percent' => 'required',
            'sector_id' => 'required'
           // 'image' =>  'required|max:10000|mimes:png,jpeg,jpg'
        ]);

        $in = Input::except('_method','_token');

       // dd($in);
        
             $imageGallery = $request->file('image');
            // dd($imageGallery);
            if($request->hasFile('image_url')){
            $image3 = $request->file('image_url');
           // $name = uniqid() . rand(55555, 99999) . '.png';
            $filename3 =uniqid() . rand(55555, 99999).'.'.$image3->getClientOriginalExtension();
            $location = 'assets/images/' . $filename3;
            Image::make($image3)->save($location);
            $in['image_url'] = $filename3;
            $in['slug'] = str_slug($request->name);
            $in['remaining_units'] = $request->available_units;
        }
       
       $market = Market::create($in);
        
       foreach ($imageGallery as $key => $value) {
        $filename = uniqid() . rand(55555, 99999).'.'.$value->getClientOriginalExtension();
        $location = 'assets/images/' . $filename;
        Image::make($value)->save($location);
        $market->market_images()->create([
            'image' => $filename
        ]);
          
       }

        session()->flash('message', 'Property Added Successfully.');
        Session::flash('type', 'success');
        Session::flash('title', 'Success');
        return redirect(self::$link);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
