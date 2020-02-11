<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Auth;
use App\User;


class ProfileController extends Controller
{
    //
    public function saveProfile(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[
            'gender' => 'required',
            'dob' => 'required',
            'nationality' => 'required',
            'address' => 'required',
            'state' => 'required',
            'name_of_next_of_kin' => 'required',
            'relationship' => 'required',
            'address_of_next_of_kin' => 'required',
            'image1' => 'required|mimes:jpg,png,jpeg',
            
        ]);
        $profile = Input::except('_method','_token');
       
        if($request->hasFile('image1')){
            $image1 = $request->file('image1');
            $filename = time().'.'.$image1->getClientOriginalExtension();
            $location = 'assets/images/' . $filename;
            Image::make($image1)->resize(60,60)->save($location);
            $profile['image1'] = $filename;
        }
        // if($request->hasFile('image2')){
        //     $image2 = $request->file('image2');
        //     $filename2 = time().'.'.$image2->getClientOriginalExtension();
        //     $location2 = 'assets/images/' . $filename2;
        //     Image::make($image2)->resize(300,300)->save($location2);
        //     $profile['image2'] = $filename2;
        // }
        auth::user()->profile()->create($profile);
        User::where('id', auth()->id())->update([
           'profile_verify' => 'Submitted',
           'image' => $filename
        ]);
        session()->flash('message', 'Profile Save Successfully.');
        Session::flash('type', 'success');
        Session::flash('title', 'Success');
        return redirect('/user/dashboard');
    }
}
