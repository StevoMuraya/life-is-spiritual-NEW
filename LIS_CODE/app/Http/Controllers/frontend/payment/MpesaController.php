<?php

namespace App\Http\Controllers\frontend\payment;

use App\Models\Books;
use Illuminate\Support\Str;
use App\Models\BookPayments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MpesaController extends Controller
{

    
    public function __construct()
    {
        $this-> Middleware(['auth']);
    }

    public function index($book){
        $book = Books::where('slug','=',$book)->first();
        return view('frontend.checkout.index',[
            'active'=>'books',
            'book'=>$book,
        ]);
    }

    public function getAccessToken(){
        $url = env('MPESA_ENV') == 0
        ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'
        :'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $curl = curl_init($url);
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf8'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY'). ':' . env('MPESA_CONSUMER_SECRET')
                )
        );
        $response = json_decode(curl_exec($curl));
        curl_close($curl);
        

        return $response->access_token;
    }


    public function registerURL(){
        $body = array(
            'ShortCode'         => env('MPESA_SHORTCODE'),
            'ResponseType'      => 'Completed',
            'ConfirmationURL'   => env('MPESA_TEST_URL') . '/api/confirmation',
            'ValidationURL'     => env('MPESA_TEST_URL') . '/api/validation',
        );

        $url = env('MPESA_ENV') == 0
        ? 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl'
        :'https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl';

        $response = $this->makeHttp($url,$body);

        return $response;
    }

    public function stkPush(Request $request,Books $id){
        $timestamp = date('YmdHis');
        $password = base64_encode(env('MPESA_STK_SHORTCODE').env('MPESA_PASSKEY').$timestamp);

        // dd($password);

        $this->validate($request,[
            'email'=>'required|max:255',
            'phone'=>'required|max:255',
            'name'=>'required|max:255',
            'address'=>'required|max:255',
            'residence'=>'required|max:255',
            'country'=>'required|max:255',
            'postal_code'=>'required|max:255',
        ]);

            $phoneSanitize = $request->phone;
            if (Str::startsWith($phoneSanitize, '0')) {
                $phoneSanitize = ltrim($phoneSanitize,"0");
            }
            if (Str::startsWith($phoneSanitize, '+')) {
                $phoneSanitize = ltrim($phoneSanitize,"+");
            }

            if(strlen($phoneSanitize) > 9 && strlen($phoneSanitize) != 12){
                dd('Phone number: ni kubwa than 9 '.$phoneSanitize.' '.strlen($phoneSanitize) );
                return back()->with('status', 'Invalid Phone Number');
            }
            if(strlen($phoneSanitize) == 12 && !(Str::startsWith($phoneSanitize, '254'))){
                dd('Phone number: ni hainanzi 254 '.$phoneSanitize.' '.strlen($phoneSanitize) );
                return back()->with('status', 'Invalid Phone Number');
            }
            if(strlen($phoneSanitize) < 9){
                dd('Phone number: ni less than 9 '.$phoneSanitize.' '.strlen($phoneSanitize) );
                return back()->with('status', 'Invalid Phone Number');
            }

            $phoneSanitize = '254'.$phoneSanitize;


            // dd($phoneSanitize);


        $userPayment = BookPayments::where('user_id','=',auth()->user()->id)->where('confirmed','=',0)->first();


        if ($userPayment!=null) {
            return redirect()->route('payments.index')->with('successMessage',null)
            ->with('PendingMessg','Pending Book Payment, Please confirm the payment first');
        }else{
            $curl_post_data = array(
                'BusinessShortCode' => env('MPESA_STK_SHORTCODE'),
                'Password' => $password,
                'Timestamp' => $timestamp,
                'TransactionType' => 'CustomerPayBillOnline',
                'Amount' => 1,
                'PartyA' => $phoneSanitize,
                'PartyB' => env('MPESA_STK_SHORTCODE'),
                'PhoneNumber' => $phoneSanitize,
                'CallBackURL' => env('MPESA_TEST_URL')
                                .'/api/stkPush/'
                                .$id->id
                                .'/'.auth()->user()->id
                                .'/'.$request->address
                                .'/'.$request->residence
                                .'/'.$request->postal_code
                                .'/'.$request->postal_code,
                'AccountReference' => 'LaravelTest',
                'TransactionDesc' => 'LaravelTest'
            );
    
            $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    
            $response = $this->makeHttp($url, $curl_post_data);
    
            // dd($response);

            return view('frontend.checkout.payment_pay',[
                'active'=>'none',
                'phone'=>$request->phone,
            ])->with('successMessage',null)
            ->with('PendingMessg',null);
        }
    }

    public function simulateTransaction(Request $request, Books $id){
        $this->validate($request,[
            'email'=>'required|max:255',
            'phone'=>'required|max:255',
            'name'=>'required|max:255',
            'address'=>'required|max:255',
            'residence'=>'required|max:255',
            'country'=>'required|max:255',
            'postal_code'=>'required|max:255',
        ]);

        $url = env('MPESA_ENV') == 0
        ? 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate'
        :'https://api.safaricom.co.ke/mpesa/c2b/v1/simulate';

        $body = array(
            'ShortCode'=> env('MPESA_SHORTCODE'),
            'Msisdn'=>'254708374149',
            'Amount'=>$id->price,
            'BillRefNumber'=>'LaraTest',
            'CommandID'=>'CustomerPayBillOnline'
        );
        $response = $this->makeHttp($url,$body);

        return $response;
    }

    public function makeHttp($url, $body)
    {
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array('Content-Type:application/json','Authorization:Bearer ' . $this->getAccessToken()),
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => json_encode($body)
            )
        ); 

        
        
        $curl_response = curl_exec($curl);
        curl_close($curl);

        return $curl_response;
    }

}
