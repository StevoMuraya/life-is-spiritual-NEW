<?php

namespace App\Http\Controllers\frontend\payment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\BookPayments;
use App\Models\Books;
use App\Models\User;

class MpesaResponsesController extends Controller
{
    public function validation(Request $request){
        Log::info('Validation endpoint hit');
        Log::info($request->all());
        
        // return [
        //     'ResultCode'=>0,
        //     'ResultDesc'=>'Accept Service',
        //     'ThirdPartyTransID'=> rand(300, 10000)
        // ];
    }
    public function confirmation(Request $request){
        Log::info('Confirmation endpoint hit');
        Log::info($request->all());
    }

    public function stkPush(Request $request, Books $id, User $user, $address,$city,$country,$postal_code){
        Log::info('stkPush endpoint hit');
        $response = json_decode($request->getContent());
        
        Log::info('user'.$user);

        $resData = $response->Body->stkCallback->CallbackMetadata;
        $resCode = $response->Body->stkCallback->ResultCode;
        $resMessage = $response->Body->stkCallback->ResultDesc;
        $amountPaid = $resData->Item[0]->Value;
        $trabsactionId = $resData->Item[1]->Value;
        $paymentPhoneNumber = $resData->Item[4]->Value;
        $amountPaid = $resData->Item[0]->Value;
        
        $bookPayments = new BookPayments();
        
        $bookPayments->phone = $paymentPhoneNumber;
        $bookPayments->book_title = $id->title;
        $bookPayments->amount = $amountPaid;
        $bookPayments->book_id = $id->id;
        $bookPayments->user_id = $user->id;
        $bookPayments->transaction_id = $trabsactionId;
        $bookPayments->confirmed = 0;
        $bookPayments->address = $address;
        $bookPayments->city = $city;
        $bookPayments->country = $country;
        $bookPayments->postal_code = $postal_code;
        $bookPayments->save();

        Log::info('Amount paid: '.$amountPaid.' Phone: '.$paymentPhoneNumber);
        Log::info('Book Title: '.$id->title.' Book Id: '.$id->id);
        Log::info($request->getContent());

    }
}
