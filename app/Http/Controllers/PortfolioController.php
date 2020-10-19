<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Image;
use File;
use Session;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = \App\Portfolio::orderBy('idPortfolio','DESC')->get();
        $services = ['' => 'Select Service'] + \App\Service::where('isActive','=','Y')->pluck('serviceName', 'idService')->toArray();
        return view('portfolio.index', compact('portfolios','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfolios = \App\Portfolio::orderBy('idPortfolio','DESC')->get();
        $services = ['' => 'Select Service'] + \App\Service::where('isActive','=','Y')->pluck('serviceName', 'idService')->toArray();
        return view('portfolio.index', compact('portfolios','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'idService' => 'required',
            // 'video' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        $messages = [
            
        ];
        $this->validate($request, $rules, $messages);
        $portfolio = new \App\Portfolio();
        $portfolio->fill($request->all());
        if ($files = $request->file('image')) {     
            // for save original image
            $ImageUpload = Image::make($files);
            // for save thumnail image
            $thumbnailPath = 'img/logos/';
            $ImageUpload->resize(800,800);
            $ImageUpload = $ImageUpload->save($thumbnailPath.'logo_'.time().'.'.$files->getClientOriginalExtension());
            $portfolio->image = $ImageUpload->basename;
        }
        $portfolio->save();
        Session::flash('message','Portfolio added successfully !!');
        return redirect('/portfolios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = \App\Portfolio::where('idPortfolio','=',$id)->first();
        $portfolios = \App\Portfolio::orderBy('idPortfolio','DESC')->get();
        $services = ['' => 'Select Service'] + \App\Service::where('isActive','=','Y')->pluck('serviceName', 'idService')->toArray();
        
        return view('portfolio.index', compact('portfolios','portfolio','services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = \App\Portfolio::where('idPortfolio','=',$id)->first();
        $portfolios = \App\Portfolio::orderBy('idPortfolio','DESC')->get();
        $services = ['' => 'Select Service'] + \App\Service::where('isActive','=','Y')->pluck('serviceName', 'idService')->toArray();
        return view('portfolio.index', compact('portfolios','portfolio','services'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = \App\Portfolio::where('idPortfolio', '=', $id)->first();

        $rules = [
            'idService' => 'required',
        ];
        $messages = [];
        $this->validate($request, $rules, $messages);
        $image_path = public_path("img/logos/".$portfolio->image);
        // dd($image_path);
        if(file_exists($image_path)){
            //File::delete($image_path);
            File::delete( $image_path);
        }
        $portfolio->fill($request->all());
        if ($files = $request->file('image')) {     
            // for save original image
            $ImageUpload = Image::make($files);
            // for save thumnail image
            $thumbnailPath = 'img/logos/';
            $ImageUpload->resize(800,800);
            $ImageUpload = $ImageUpload->save($thumbnailPath.'logo_'.time().'.'.$files->getClientOriginalExtension());
            $portfolio->image = $ImageUpload->basename;
        }
        $portfolio->update();
        Session::flash('message','Portfolio updated successfully !!');
        return redirect('portfolios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = \App\Portfolio::where('idPortfolio', '=', $id)->first();
        $image_path = app_path("img/logos/".$portfolio->image);

        if(file_exists($image_path)){
            //File::delete($image_path);
            File::delete( $image_path);
        }
        $portfolio->delete();
        return response()->json(['success' => "SUCCESS"], 200, ['app-status' => 'success']);
    }
}
