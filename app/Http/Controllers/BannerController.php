<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Image;
use File;
use Session;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = \App\Banner::orderBy('idBanner','DESC')->get();

        return view('banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $banners = \App\Banner::orderBy('idBanner','DESC')->get();

        return view('banner.index', compact('banners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            // 'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ];
        $messages = [
            
        ];
        $this->validate($request, $rules, $messages);
        $banner = new \App\Banner();
        $banner->fill($request->all());
        if ($files = $request->file('image')) {     
            // for save original image
            $ImageUpload = Image::make($files);
            // for save thumnail image
            $thumbnailPath = 'img/banner/';
            $ImageUpload->resize(1349,486);
            $ImageUpload = $ImageUpload->save($thumbnailPath.'banner_'.time().'.'.$files->getClientOriginalExtension());
            $banner->image = $ImageUpload->basename;
        }
        $banner->save();
        Session::flash('message','Banner member added successfully !!');
        return redirect('/banners');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = \App\Banner::where('idBanner','=',$id)->first();
        $banners = \App\Banner::orderBy('idBanner','DESC')->get();

        return view('banner.index', compact('banners','banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = \App\Banner::where('idBanner','=',$id)->first();
        $banners = \App\Banner::orderBy('idBanner','DESC')->get();

        return view('banner.index', compact('banners','banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = \App\Banner::where('idBanner', '=', $id)->first();

        $rules = [
            'name' => 'required',
            'designation' => 'required',
            // 'image' => 'required',
        ];
        $messages = [];
        $this->validate($request, $rules, $messages);
        $image_path = app_path("img/banner/".$banner->image);
        if(file_exists($image_path)){
            //File::delete($image_path);
            File::delete( $image_path);
        }
        $banner->fill($request->all());
        if ($files = $request->file('image')) {     
            // for save original image
            $ImageUpload = Image::make($files);
            // for save thumnail image
            $thumbnailPath = 'img/banner/';
            $ImageUpload->resize(160,160);
            $ImageUpload = $ImageUpload->save($thumbnailPath.'banner_'.time().'.'.$files->getClientOriginalExtension());
            $banner->image = $ImageUpload->basename;
        }
        $banner->update();
        Session::flash('message','banner updated successfully !!');
        return redirect('banners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = \App\Banner:: where('idBanner', '=', $id)->first();
        $banner->delete();
        return response()->json(['success' => "SUCCESS"], 200, ['app-status' => 'success']);
    }
}
