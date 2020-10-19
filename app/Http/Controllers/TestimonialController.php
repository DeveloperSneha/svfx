<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Image;
use Session;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = \App\Testimonial::orderBy('idTestimonial','DESC')->get();

        return view('testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $testimonials = \App\Testimonial::orderBy('idTestimonial','DESC')->get();

        return view('testimonial.index', compact('testimonials'));
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
            'name' => 'required|unique:testimonials|max:300|between:2,300',
            'reviews' => 'required',
            'image' => 'required',

        ];
        $messages = [
            
        ];
        $this->validate($request, $rules, $messages);
        $testimonial = new \App\Testimonial();
        $testimonial->fill($request->all());
        if ($files = $request->file('image')) {     
            // for save original image
            $ImageUpload = Image::make($files);
            // for save thumnail image
            $thumbnailPath = 'img/team/';
            $ImageUpload->resize(160,160);
            $ImageUpload = $ImageUpload->save($thumbnailPath.'team_'.time().'.'.$files->getClientOriginalExtension());
            $testimonial->image = $ImageUpload->basename;
        }
        $testimonial->save();
        Session::flash('message',$testimonial->name .' '.'added successfully !!');
        return redirect('/testimonials');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = \App\Testimonial::where('idTestimonial','=',$id)->first();
        $testimonials = \App\Testimonial::orderBy('idTestimonial','DESC')->get();

        return view('testimonial.index', compact('testimonials','testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = \App\Testimonial::where('idTestimonial','=',$id)->first();
        $testimonials = \App\Testimonial::orderBy('idTestimonial','DESC')->get();

        return view('testimonial.index', compact('testimonials','testimonial'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = \App\Testimonial::where('idTestimonial', '=', $id)->first();

        $rules = [
            'name' => 'required|max:300', Rule::unique('testimonials')->ignore($testimonial->idTestimonial, 'idTestimonial'),
        ];
        $messages = [];
        $this->validate($request, $rules, $messages);
        
        $image_path = app_path("img/team/".$testimonial->image);
        if(file_exists($image_path)){
            //File::delete($image_path);
            File::delete( $image_path);
        }
        $testimonial->fill($request->all());
        if ($files = $request->file('image')) {     
            // for save original image
            $ImageUpload = Image::make($files);
            // for save thumnail image
            $thumbnailPath = 'img/team/';
            $ImageUpload->resize(160,160);
            $ImageUpload = $ImageUpload->save($thumbnailPath.'team_'.time().'.'.$files->getClientOriginalExtension());
            $testimonial->image = $ImageUpload->basename;
        }
        $testimonial->update();
        flash($testimonial->name .' '.'updated successfully !!');
        return redirect('testimonials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = \App\Testimonial:: where('idTestimonial', '=', $id)->first();
        $testimonial->delete();
        return response()->json(['success' => "SUCCESS"], 200, ['app-status' => 'success']);
    }
}
