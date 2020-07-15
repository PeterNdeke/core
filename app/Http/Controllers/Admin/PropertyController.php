<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use App\SectorCategory;
use App\Sector;
use App\Property;

class PropertyController extends Controller
{
    protected static $folder = 'admin.properties.';
    protected static $link = 'admin/properties';
    protected static $mainTitle = 'Properties';
    protected static $message = 'Property posted successfully';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $page_title = 'All Properties';
        $sectors = Property::orderBy('id', 'DESC')->paginate(10);
        return view(self::$folder . 'index', compact('sectors','page_title'))->withTitle(self::$mainTitle)->with(['link' => self::$link]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Add New Sector Property';
       //  $sector = Sector::all();
        return view(self::$folder . 'add', compact('page_title'))->withTitle(self::$mainTitle)->with('link', self::$link);
        //
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
        }
       
       $property = Property::create($in);
        
       foreach ($imageGallery as $key => $value) {
        $filename = time().'h7'.'.'.$value->getClientOriginalExtension();
        $location = 'assets/images/' . $filename;
        Image::make($value)->save($location);
        $property->property_galleries()->create([
            'image' => $filename
        ]);
          
       }
       $features = explode(",", $request->feature);
       foreach ($features as $key => $item) {
          $property->property_features()->create([
              'feature' => $item
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
        $page_title = 'Edit Sector Category';
        $sectors = Sector::all();
        $sector = SectorCategory::find($id);
        return view(self::$folder . 'edit', compact('sector','page_title','sectors'))->with('link', self::$link)->withTitle('Edit Post');
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
        $btc = SectorCategory::findOrFail($id);
        $this->validate($request,[
            'category_name' => 'required',
            'sector_name' => 'required',

            'description'=>'required',
            'image_url' => 'max:10000|mimes:png,jpeg,jpg',
           
        ]);
        $in = Input::except('_method','_token');
        
        if($request->hasFile('image_url')) {
            $image3 = $request->file('image_url');
            $filename3 = time() . 'h7' . '.' . $image3->getClientOriginalExtension();
            $location = 'assets/images/' . $filename3;
            Image::make($image3)->save($location);
            $in['image_url'] = $filename3;
            $path = './assets/images/';
            $link = $path.$btc->image_url;
            if (file_exists($link)){
                unlink($link);
            }
        }
        $btc->fill($in)->save();
        session()->flash('message', 'Sector Updated Successfully.');
        Session::flash('type', 'success');
        Session::flash('title', 'Success');
        return redirect(self::$link);
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
        $model = Property::findOrFail($id);
        $model->property_galleries()->delete();
        $model->property_features()->delete();
        $model->delete();
        return redirect(self::$link);
    }
}
