<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Insight;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class InsightController extends Controller
{
    protected static $folder = 'admin.insight.';
    protected static $link = 'admin/insights';
    protected static $mainTitle = 'Insight';
    protected static $message = 'Insight posted successfully';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'All Insights';
        $posts = Insight::orderBy('id', 'DESC')->paginate(10);
        return view(self::$folder . 'index', compact('posts','page_title'))->withTitle(self::$mainTitle)->with(['link' => self::$link]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Add New Insights';

        return view(self::$folder . 'add', compact('page_title'))->withTitle(self::$mainTitle)->with('link', self::$link);
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
            'title' => 'required',

            'description' => 'required'

           // 'image' => 'required|max:10000|mimes:png,jpeg,jpg',

        ]);

        $in = Input::except('_method','_token');
        $in['author'] = 'Admin';
        $in['slug'] = uniqid("insight-",true); 
       
            if($request->hasFile('image')){
            $image3 = $request->file('image');
            $filename3 = time().'h7'.'.'.$image3->getClientOriginalExtension();
            $location = 'assets/images/' . $filename3;
            Image::make($image3)->resize(400,400)->save($location);
            $in['image_url'] = $filename3;
        }
        Insight::create($in);
        session()->flash('message', 'Insight Added Successfully.');
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
        $page_title = 'Add New Insights';
        $post = Insight::find($id);
        return view(self::$folder . 'edit', compact('post','page_title'))->with('link', self::$link)->withTitle('Edit Post');

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
        $btc = Insight::findOrFail($id);
        $this->validate($request,[
            'title' => 'required',
            'image' => 'mimes:png,jpg,jpeg',
            'description' => 'required',
           
        ]);
        $in = Input::except('_method','_token');
        
        if($request->hasFile('image')) {
            $image3 = $request->file('image');
            $filename3 = time() . 'h7' . '.' . $image3->getClientOriginalExtension();
            $location = 'assets/images/' . $filename3;
            Image::make($image3)->resize(400, 400)->save($location);
            $in['image'] = $filename3;
            $path = './assets/images/';
            $link = $path.$btc->image;
            if (file_exists($link)){
                unlink($link);
            }
        }
        $btc->fill($in)->save();
        session()->flash('message', 'Insight Updated Successfully.');
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
        $model = Insight::findOrFail($id);
        $model->delete();
        return redirect(self::$link);

    }
}
