<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Input;
use Session;
use URL;
use Redirect;
use Mail;

class PaymentController extends Controller
{
	private $_api_context;

    public function __construct()
    {
		/** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
	}
	public function alert(){
		return view('alert');
	}

	public function payWithpaypal(Request $request)
    {
    	// dd($request->all());
    	if($request->file('cashapp')){
    		$user = new \App\User();
    		if($request->idService == 1){
    			$newArray = array();
    			$arrayData =$request->q9_chooseA;
				foreach($arrayData as $key => $value) {
				    foreach($value as $key2 => $value2) {
				        $newArray[$key2] = $value2;				        
				    }
				  $newArray[4] =implode(',', $newArray);  
				}
				$user->products =$newArray[4];
    			$user->name =$request->q1_whatsYour1;
	    		$user->email =$request->q2_whatsYour;
	    		$user->companyTitle =$request->q3_ltstronggtwhatsThe;
	    		$user->slogan =$request->q4_ltstronggtdoYou;
	    		$user->companyDescription =ltrim($request->q5_ltstronggtdescriptionOf,"jotform_untitled_markdown");
	    		$user->logoDiscription =ltrim($request->q15_ltstronggtdescriptionOf15,"jotform_untitled_markdown");
	    		$user->logoLook =ltrim($request->q14_ltstronggtlook,"jotform_untitled_markdown");
	    		$user->audience =ltrim($request->q16_ltstronggttargetAudienceltstronggt,"jotform_untitled_markdown");
	    		if( $request->file('q6_ltstronggtcanYou')){
		            $image = $request->file('q6_ltstronggtcanYou');
		            $photo_name = 'logo_'.uniqid().'.'.$image[0]->getClientOriginalExtension();
		            $image[0]->move('sample/',$photo_name);
		            $user->logoExample = $photo_name;
	        	}
	    		// $user->logoExample =$request->samplelogo;
	    		$user->competitor =ltrim($request->q12_ltstronggtcompetitorsoptionalltstronggt,"jotform_untitled_markdown");
	    		$user->instagram =$request->q10_whatsYour10;
	    		if( $request->file('cashapp')){
		            $img = $request->file('cashapp');
		            $p_name = 'cashapp_'.uniqid().'.'.$img->getClientOriginalExtension();
		            $img->move('cashapp/',$p_name);
		            $user->cashapp = $p_name;
	        	}
	    		$user->paymentType =$request->q19_typeA19;
	    		$user->idService =$request->idService;
	    		$user->primaryColor =$request->q8_ltstronggtcolorScheme['field_1'];
	    		$user->secondaryColor =$request->q8_ltstronggtcolorScheme['field_4'];
	    		$user->background =$request->q8_ltstronggtcolorScheme['field_3'];
    		}else if($request->idService == 2){
    			$newArray = array();
    			$arrayData =$request->q9_chooseA;
				foreach($arrayData as $key => $value) {
				    foreach($value as $key2 => $value2) {
				        $newArray[$key2] = $value2;				        
				    }
				  $newArray[4] =implode(',', $newArray);  
				}
				$user->products =$newArray[4];
	    		$user->name =$request->q4_artistsNames;
	    		$user->email =$request->q2_whatsYour;
	    		$user->companyTitle =$request->q13_whatsThe13;
	    		$user->slogan =$request->q4_artistsNames;
	    		$user->companyDescription =ltrim($request->q5_whatAre5,"jotform_untitled_markdown");
	    		$user->logoDiscription =$request->q14_producersNames14;
	    		$user->logoLook =$request->q12_parentalAdvisory12;
	    		$user->audience =$request->q11_doYou;
	    		$user->competitor =ltrim($request->q10_insertYour,"jotform_untitled_markdown");
	    		$user->instagram =$request->q15_whatsYour15;
	    		$user->paymentType =$request->q16_chooseA;
	    		if( $request->file('q6_uploadFiles6')){
		            $image = $request->file('q6_uploadFiles6');
		            $photo_name = 'logo_'.uniqid().'.'.$image[0]->getClientOriginalExtension();
		            $image[0]->move('sample/',$photo_name);
		            $user->logoExample = $photo_name;
	        	}
	    		
	    		if( $request->file('cashapp')){
		            $img = $request->file('cashapp');
		            $p_name = 'cashapp_'.uniqid().'.'.$img->getClientOriginalExtension();
		            $img->move('cashapp/',$p_name);
		            $user->cashapp = $p_name;
	        	}
	    		// $user->cashapp =$request->cashapp;
	    		$user->idService =$request->idService;
	    	} else if($request->idService == 3){
	    		$newArray = array();
    			$arrayData =$request->q9_chooseA;
				foreach($arrayData as $key => $value) {
				    foreach($value as $key2 => $value2) {
				        $newArray[$key2] = $value2;				        
				    }
				  $newArray[4] =implode(',', $newArray);  
				}
				$user->products =$newArray[4];
	    		$user->name =$request->q4_artistsNames;
	    		$user->email =$request->q2_whatsYour;
	    		$user->companyTitle =$request->q13_whatsThe13;
	    		$user->slogan =$request->q14_producersNames14;
	    		$user->logoLook =$request->q12_parentalAdvisory12;
	    		$user->companyDescription =ltrim($request->q5_whatAre5,"jotform_untitled_markdown");
	    		$user->audience =$request->q11_doYou;
	    		$user->competitor =ltrim($request->q10_insertYour,"jotform_untitled_markdown");
	    		$user->instagram =$request->q15_whatsYour15;
	    		$user->paymentType =$request->q16_chooseA;
	    		if( $request->file('q6_uploadFiles6')){
	    			$image = $request->file('q6_uploadFiles6');
	    			$photo_name = 'logo_'.uniqid().'.'.$image[0]->getClientOriginalExtension();
		            $image[0]->move('sample/',$photo_name);
		            $user->logoExample = $photo_name;
	        	}
	    		// $user->logoExample =$request->samplelogo;
	    		if( $request->file('cashapp')){
		            $img = $request->file('cashapp');
		            $p_name = 'cashapp_'.uniqid().'.'.$img->getClientOriginalExtension();
		            $img->move('cashapp/',$p_name);
		            $user->cashapp = $p_name;
	        	}
	        }else if($request->idService == 4){
	        	$newArray = array();
    			$arrayData =$request->q9_chooseA;
				foreach($arrayData as $key => $value) {
				    foreach($value as $key2 => $value2) {
				        $newArray[$key2] = $value2;				        
				    }
				  $newArray[4] =implode(',', $newArray);  
				}
				$user->products =$newArray[4];
	    		$user->name =$request->q1_whatsYour1;
	    		$user->email =$request->q2_whatsYour;
	    		$user->companyTitle =$request->q3_whatsThe;
	    		$user->companyDescription =ltrim($request->q5_whatAre,"jotform_untitled_markdown");
	    		$user->instagram =$request->q10_whatsYour10;
	    		$user->paymentType =$request->q11_chooseA11;
	    		if( $request->file('q6_uploadFiles6')){
	    			$image = $request->file('q6_uploadFiles6');
	    			$photo_name = 'logo_'.uniqid().'.'.$image[0]->getClientOriginalExtension();
		            $image[0]->move('sample/',$photo_name);
		            $user->logoExample = $photo_name;
	        	}
	    		if( $request->file('cashapp')){
	    			$img = $request->file('cashapp');
		            $p_name = 'cashapp_'.uniqid().'.'.$img->getClientOriginalExtension();
		            $img->move('cashapp/',$p_name);
		            $user->cashapp = $p_name;
	        	}	    		
    		}
    		$user->payment =$request->payment_total_checksum;
    		$user->idService =$request->idService;
    		// $user->payment =$request->payment;
    		$user->password = bcrypt('abc@123');
    		$user->paymentStatus = 'Success';
    		$user->save();    
    		Mail::send('mail.invoice', ['user' => $user], function ($m) use($user,$pdf) {
                    $m->from(config('mail.username'), 'SimarVFX');
                    //$m->attach(public_path().'/sample/'.$user->logoExample);
                    $m->to('snehas@hkcl.in')->subject('Order Placed on SimarVFX');
                    // $m->to('')->subject('');
                    // $m->cc('')->subject('');
            });
            Mail::send('mail.newrequest', ['user' => $user], function ($m) use($user,$pdf) {
                    $m->from(config('mail.username'), 'SimarVFX');
                    $m->attach(public_path().'/sample/'.$user->logoExample);
                    $m->attach(public_path().'/cashapp/'.$user->cashapp);
                    $m->to('snehas@hkcl.in')->subject('New Order Request on SimarVFX');
                    // $m->to('')->subject('');
                    $m->cc('sneha.singh9990@gmail.com')->subject('New Order Request on Simarvfx');
            });
            \Session::flash('success', 'Thankyou for Your Purchase, You should recevie an order confirmation email shortly.  \n\n For any query contact snehas@hkcl.in');
    		return redirect('/alert');
    	}else{
    	    $copy_user = new \App\CopyUser();
    	    if( $request->file('q6_uploadFiles6')){
    			$image = $request->file('q6_uploadFiles6');
    			$photo_name = 'logo_'.uniqid().'.'.$image[0]->getClientOriginalExtension();
	            $image[0]->move('sample/',$photo_name);
	            $copy_user->logoExample = $photo_name;
        	}
    		if($request->idService == 1){
    			$newArray = array();
    			$arrayData =$request->q9_chooseA;
				foreach($arrayData as $key => $value) {
				    foreach($value as $key2 => $value2) {
				        $newArray[$key2] = $value2;				        
				    }
				  $newArray[4] =implode(',', $newArray);  
				}
				$copy_user->products =$newArray[4];
    			$copy_user->name =$request->q1_whatsYour1;
	    		$copy_user->email =$request->q2_whatsYour;
	    		$copy_user->companyTitle =$request->q3_ltstronggtwhatsThe;
	    		$copy_user->slogan =$request->q4_ltstronggtdoYou;
	    		$copy_user->companyDescription =ltrim($request->q5_ltstronggtdescriptionOf,"jotform_untitled_markdown");
	    		$copy_user->logoDiscription =ltrim($request->q15_ltstronggtdescriptionOf15,"jotform_untitled_markdown");
	    		$copy_user->logoLook =ltrim($request->q14_ltstronggtlook,"jotform_untitled_markdown");
	    		$copy_user->audience =ltrim($request->q16_ltstronggttargetAudienceltstronggt,"jotform_untitled_markdown");
	    		// $copy_user->logoExample =$request->samplelogo;
	    		$copy_user->competitor =ltrim($request->q12_ltstronggtcompetitorsoptionalltstronggt,"jotform_untitled_markdown");
	    		$copy_user->instagram =$request->q10_whatsYour10;
	    		$copy_user->paymentType =$request->q19_typeA19;
	    		$copy_user->idService =$request->idService;
	    		$copy_user->primaryColor =$request->q8_ltstronggtcolorScheme['field_1'];
	    		$copy_user->secondaryColor =$request->q8_ltstronggtcolorScheme['field_4'];
	    		$copy_user->background =$request->q8_ltstronggtcolorScheme['field_3'];
    		}else if($request->idService == 2){
    			$newArray = array();
    			$arrayData =$request->q9_chooseA;
				foreach($arrayData as $key => $value) {
				    foreach($value as $key2 => $value2) {
				        $newArray[$key2] = $value2;				        
				    }
				  $newArray[4] =implode(',', $newArray);  
				}
				$copy_user->products =$newArray[4];
	    		$copy_user->name =$request->q4_artistsNames;
	    		$copy_user->email =$request->q2_whatsYour;
	    		$copy_user->companyTitle =$request->q13_whatsThe13;
	    		$copy_user->slogan =$request->q4_artistsNames;
	    		$copy_user->companyDescription =ltrim($request->q5_whatAre5,"jotform_untitled_markdown");
	    		$copy_user->logoDiscription =$request->q14_producersNames14;
	    		$copy_user->logoLook =$request->q12_parentalAdvisory12;
	    		$copy_user->audience =$request->q11_doYou;
	    		$copy_user->competitor =ltrim($request->q10_insertYour,"jotform_untitled_markdown");
	    		$copy_user->instagram =$request->q15_whatsYour15;
	    		$copy_user->paymentType =$request->q16_chooseA;
	    	} else if($request->idService == 3){
	    		$newArray = array();
    			$arrayData =$request->q9_chooseA;
				foreach($arrayData as $key => $value) {
				    foreach($value as $key2 => $value2) {
				        $newArray[$key2] = $value2;				        
				    }
				  $newArray[4] =implode(',', $newArray);  
				}
				$copy_user->products =$newArray[4];
	    		$copy_user->name =$request->q4_artistsNames;
	    		$copy_user->email =$request->q2_whatsYour;
	    		$copy_user->companyTitle =$request->q13_whatsThe13;
	    		$copy_user->slogan =$request->q14_producersNames14;
	    		$copy_user->logoLook =$request->q12_parentalAdvisory12;
	    		$copy_user->companyDescription =ltrim($request->q5_whatAre5,"jotform_untitled_markdown");
	    		$copy_user->audience =$request->q11_doYou;
	    		$copy_user->competitor =ltrim($request->q10_insertYour,"jotform_untitled_markdown");
	    		$copy_user->instagram =$request->q15_whatsYour15;
	    		$copy_user->paymentType =$request->q16_chooseA;
	        }else if($request->idService == 4){
	        	$newArray = array();
    			$arrayData =$request->q9_chooseA;
				foreach($arrayData as $key => $value) {
				    foreach($value as $key2 => $value2) {
				        $newArray[$key2] = $value2;				        
				    }
				  $newArray[4] =implode(',', $newArray);  
				}
				$copy_user->products =$newArray[4];
	    		$copy_user->name =$request->q1_whatsYour1;
	    		$copy_user->email =$request->q2_whatsYour;
	    		$copy_user->companyTitle =$request->q3_whatsThe;
	    		$copy_user->companyDescription =ltrim($request->q5_whatAre,"jotform_untitled_markdown");
	    		$copy_user->instagram =$request->q10_whatsYour10;
	    		$copy_user->paymentType =$request->q11_chooseA11;
    		}
    		$copy_user->logoExample = $copy_user_new;
    		$copy_user->idService =$request->idService;
    		$copy_user->payment =$request->payment_total_checksum+3;
    		$copy_user->password = bcrypt('abc@123');
    		$copy_user->paymentStatus = 'Success';
    		$copy_user->save(); 
        	
    		$data = $request->all();
    		\Session::put('data', $data);
	    	$service = \App\Service::where('idService','=',$request->idService)->first();
	    	$pay =$request->payment_total_checksum;
	    	$actal_price = $pay;
			$payer = new Payer();
			        $payer->setPaymentMethod('paypal');
			$item_1 = new Item();
			$item_1->setName('Item 1') /** item name **/
		            ->setCurrency('USD')
		            ->setQuantity(1)
		            ->setPrice($actal_price); /** unit price **/
			$item_list = new ItemList();
			$item_list->setItems(array($item_1));
			$amount = new Amount();
			$amount->setCurrency('USD')
			        ->setTotal($actal_price);
			$transaction = new Transaction();
			$transaction->setAmount($amount)
			        ->setItemList($item_list)
			        ->setDescription('Your transaction description');
			$redirect_urls = new RedirectUrls();
			$redirect_urls->setReturnUrl(url('status?uid='.$copy_user->id)) /** Specify return URL **/
			        ->setCancelUrl(route('status'));
			$payment = new Payment();
			$payment->setIntent('Sale')
		            ->setPayer($payer)
		            ->setRedirectUrls($redirect_urls)
		            ->setTransactions(array($transaction));
		        /** dd($payment->create($this->_api_context));exit; **/
		    try {
				$payment->create($this->_api_context);
			} catch (\PayPal\Exception\PPConnectionException $ex) {
				if (\Config::get('app.debug')) {
					\Session::put('error', 'Connection timeout');
			                return Redirect::route('paywithpaypal');
				} else {
					\Session::put('error', 'Some error occur, sorry for inconvenient');
				                return Redirect::route('paywithpaypal');
				}
			}
			foreach ($payment->getLinks() as $link) {
				if ($link->getRel() == 'approval_url') {
					$redirect_url = $link->getHref();
			        break;
				}
			}
			/** add payment ID to session **/
			Session::put('paypal_payment_id', $payment->getId());
			if (isset($redirect_url)) {
				/** redirect to paypal **/
			    return Redirect::away($redirect_url);
			}
			\Session::put('error', 'Unknown error occurred');
		
		return Redirect::route('paywithpaypal');
		}
		return redirect('/');
	}

	public function getPaymentStatus(Request $request)
    {
    $clientid = 'AaSSP7SwQ3sYeK6gfRSUpQV4UVQBJMmgOfNkNtm33PsUlZRxjLnuzB2QsdxqvXDaqE0eeDgz1v9TQwVi';
    $clientsecret = 'EK57Yo-fW2RfY_KnVzZVXKLspSvnCQ3mSsyq2PCVOgUA50x85MSqDVBoE8iPqcUrjhKMJioRweN5XiKb';

    $apiContext = new ApiContext(new OAuthTokenCredential($clientid, $clientsecret));
        // dd($apiContext);
        /** Get the payment ID before session clear **/
        // $payment_id = Session::get('paypal_payment_id');
		/** clear the session payment ID **/
		      //  Session::forget('paypal_payment_id');
		      //  if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
// 		Session::put('error', 'Payment failed');
		          //  return Redirect::route('svfx');
// 		}
        if (empty($request->query('paymentId')) || empty($request->query('PayerID')) || empty($request->query('token')))
            return redirect('/')->withError('Payment was not successful.');
// We retrieve the payment from the paymentId.
        $payment = Payment::get($request->query('paymentId'), $apiContext);
// We create a payment execution with the PayerId
        $execution = new PaymentExecution();
        $execution->setPayerId($request->query('PayerID'));
		/**Execute the payment **/
		// $result = $payment->execute($execution, $this->_api_context);
		try {
    		$result = $payment->execute($execution, $apiContext);
			}
			catch(Exception $e){
	 		   die($e);
		}
		if ($result->getState() == 'approved') {
			$user = new \App\User();
			$user_copy =\App\CopyUser::where('id','=',$request->uid)->first()->toArray();
			// $user = $user_copy->replicate();
			$user->fill($user_copy);
    		// $user->payment =$user_copy->payment_total_checksum+3;
    		$user->password = bcrypt('abc@123');
    		$user->paymentStatus = 'Success';
			$user->save();
			
			Mail::send('mail.invoice', ['user' => $user], function ($m) use($user) {
                    $m->from(config('mail.username'), 'SimarVFX');
                    // $m->attach('public/sample/'.$user->logoExample);
                    $m->to($user->email)->subject('Order Placed on SimarVFX');
                    // $m->to('')->subject('');
                    // $m->cc('')->subject('');
            });
            Mail::send('mail.newrequest', ['user' => $user], function ($m) use($user) {
                    $m->from(config('mail.username'), 'SimarVFX');
                    if(!empty($user->logoExample)){$m->attach(public_path().'/sample/'.$user->logoExample);}
                    $m->to('snehas@hkcl.in')->subject('Ner Order Request on SimarVFX');
                    // $m->to('')->subject('');
                    // $m->cc('')->subject('');
            });
		\Session::flash('success', 'Thankyou for Your Purchase, You should recevie an order confirmation email shortly. \n\n For any query contact simarvfx@gmail.com');
    		return redirect('/alert');
    	}
		\Session::put('error', 'Payment failed');
		        return redirect('/');
		}

}
