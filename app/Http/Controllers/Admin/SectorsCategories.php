<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SectorCategory;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use App\Sector;

class SectorsCategories extends Controller
{
    protected static $folder = 'admin.sectors.';
    protected static $link = 'admin/sectors';
    protected static $mainTitle = 'Sectors Categories';
    protected static $message = 'Sector posted successfully';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'All Sectors';
        $sectors = Sector::orderBy('id', 'DESC')->paginate(10);
        return view(self::$folder . 'index', compact('sectors','page_title'))->withTitle(self::$mainTitle)->with(['link' => self::$link]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Add New Sector Category';

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
        $this->validate($request, [
            'name' => 'required',
            'image_url' => 'required|max:10000|mimes:png,jpeg,jpg',
             'description' => 'required'
        ]);

        $in = Input::except('_method','_token');

       // dd($in);
        
       
            if($request->hasFile('image_url')){
            $image3 = $request->file('image_url');
            $filename3 = time().'h7'.'.'.$image3->getClientOriginalExtension();
            $location = 'assets/images/' . $filename3;
            Image::make($image3)->save($location);
            $in['image_url'] = $filename3;
        }
        $in['slug'] = str_slug($request->name);
        Sector::create($in);
        session()->flash('message', 'Sector Added Successfully.');
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
        
        $page_title = 'Edit Sector';
        $sector = Sector::find($id);
        return view(self::$folder . 'edit', compact('sector','page_title'))->with('link', self::$link)->withTitle('Edit Post');
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
        $btc = Sector::findOrFail($id);
        $this->validate($request,[
            'name' => 'required',
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
        $model = SectorCategory::findOrFail($id);
        $model->delete();
        return redirect(self::$link);
    }
}
