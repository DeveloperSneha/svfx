<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;
use Mail;
use Session;

class MainController extends Controller
{

	public function index(Request $request) {
        if($request->ajax()) {
            $portfolios = \App\Portfolio::where('isActive','=','Y')->orderBy('idPortfolio', 'desc')->skip(16)->take(32)->get();
           return view('load_more', compact('portfolios'));
           // return response()->json(['html'=>$view]);
        }else{
        $services = \App\Service::where('isActive','=','Y')->get()->toArray();
        $response = file_get_contents('https://instagram.com/simarvfx/?__a=1');
        $self = json_decode($response);
        // dd($self);
		//$instagram = new Instagram(config('services.instagram_api.token')); // new Instagram('xxxxx.xxx.xxxxxxxxxxxxxxx') access token can be directly used here.
	 	// $self = $instagram->self();
	 	$ig_images = [];
        // $self = [];
        foreach($self->graphql->user->edge_owner_to_timeline_media->edges as $insta_details) {
            $ig_img[] = $insta_details;
            $ig_images =array_slice($ig_img,0,18);
        }
        $faqs =\App\Faq::where('isActive','=','Y')->get();
        $teams =\App\Team::where('isActive','=','Y')->get();
        $banners =\App\Banner::where('isActive','=','Y')->get();
        $testimonials =\App\Testimonial::where('isActive','=','Y')->get();
        $portfolios = \App\Portfolio::where('isActive','=','Y')->orderBy('idPortfolio', 'desc')->take(16)->get();
	    
		return view('welcome', compact('ig_images','self','services','portfolios','faqs','teams','banners','testimonials'));
        }
	}

    public function pay()
    {
        return view('paywithpaypal');
    }

    public function logoDesign(Request $request)
    {
    	$service =\App\Service::where('url','=','logo-design')->first();
    	return view('started',compact('service'));
    }

    public function coverArt(Request $request)
    {
        $service =\App\Service::where('url','=','cover-art')->first();
        return view('coverart' ,compact('service'));
    }

    public function flyer(Request $request)
    {
        $service =\App\Service::where('url','=','flyer')->first();
        return view('flyer' ,compact('service'));
    }

    function motion(Request $request)
    {
        $service =\App\Service::where('url','=','motion')->first();
        return view('motion' ,compact('service'));
    }

    public function contact(Request $request)
    {
    	$data = $request->all();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'query' => 'required',
        ]);
        unset($data['_token']);
        $data['created_at'] = date('Y-m-d H:i:s');
        $contact = new \App\Contact();
        $contact->fill($request->all());
        $contact->save();
        if ($contact) {
            Mail::send('mail.admincontact', ['data' => $data], function ($m) use ($data) {
                $m->from(config('mail.username'), 'SimarVFX');
                $m->to(config('mail.username'), 'SimarVFX')->subject('Contact Us');
            });
            \Session::put('success', 'Thanks for contacting us!! We will get back to you shortly');
            return back()->with('message_contact', 'Thanks for contacting us!! We will get back to you shortly.');
        } else {
            return back()->with('error_contact', 'Technical error!!');
        }
    }

    public function getTutorial(){
        $tutorials =\App\Tutorial::orderBy('created_at', 'desc')->get();
        return view('tutorial' ,compact('tutorials'));
    }
}
