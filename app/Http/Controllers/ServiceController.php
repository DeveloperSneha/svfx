<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Image;
use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = \App\Service::orderBy('idService','DESC')->get();

        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $services = \App\Service::orderBy('idService','DESC')->get();

        return view('service.index', compact('services'));
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
            'serviceName' => 'required|unique:services|max:300|between:2,300',
            'description' => 'required',
            'price' =>'required',
            'icon'=>'required',

        ];
        $messages = [
            
        ];
        $this->validate($request, $rules, $messages);
        $service = new \App\Service();
        $service->fill($request->all());
        if ($files = $request->file('icon')) {     
            // for save original image
            $ImageUpload = Image::make($files);
            // for save thumnail image
            $thumbnailPath = 'img/svg/';
            $ImageUpload->resize(75,75);
            $ImageUpload = $ImageUpload->save($thumbnailPath.'service_'.time().'.'.$files->getClientOriginalExtension());
            $service->icon = $ImageUpload->basename;
        }
        $service->save();
        flash($service->serviceName .' '.'added successfully !!');
        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = \App\Service::where('idService','=',$id)->first();
        $services = \App\Service::orderBy('idService','DESC')->get();

        return view('service.index', compact('services','service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = \App\Service::where('idService','=',$id)->first();
        $services = \App\Service::orderBy('idService','DESC')->get();

        return view('service.index', compact('services','service'));
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
        $service = \App\Service::where('idService', '=', $id)->first();

        $rules = [
            'serviceName' => 'required|max:300', Rule::unique('services')->ignore($service->idService, 'idService'),
        ];
        $messages = [];
        $this->validate($request, $rules, $messages);
        $image_path = app_path("img/svg/".$service->icon);

        if(file_exists($image_path)){
            //File::delete($image_path);
            File::delete( $image_path);
        }
        $service->fill($request->all());
        if ($files = $request->file('icon')) {     
            // for save original image
            $ImageUpload = Image::make($files);
            // for save thumnail image
            $thumbnailPath = 'img/svg/';
            $ImageUpload->resize(75,75);
            $ImageUpload = $ImageUpload->save($thumbnailPath.'service_'.time().'.'.$files->getClientOriginalExtension());
            $service->icon = $ImageUpload->basename;
        }
        $service->update();
        flash($service->serviceName .' '.'updated successfully !!');
        return redirect('services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = \App\Service:: where('idService', '=', $id)->first();
        $image_path = app_path("img/svg/".$service->icon);

        if(file_exists($image_path)){
            //File::delete($image_path);
            File::delete( $image_path);
        }
        $service->delete();
        return response()->json(['success' => "SUCCESS"], 200, ['app-status' => 'success']);
    }

}

