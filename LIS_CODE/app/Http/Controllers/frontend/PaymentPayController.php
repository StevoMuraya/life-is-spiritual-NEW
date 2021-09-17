<?php

namespace App\Http\Controllers\frontend;

use App\Models\BookPayments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentPayController extends Controller
{

    
    
    public function __construct()
    {
        $this-> Middleware(['auth']);
    }


    public function index()
    {
        
        $userPayment = BookPayments::where('user_id','=',auth()->user()->id)->where('confirmed','=',0)->first();
        

        if ($userPayment!=null) {

            return view('frontend.checkout.payment_pay',[
                'active'=>'none',
                'userPayment'=>$userPayment,
            ])->with('successMessage','Pending payment confirmation, please confirm the payment details below')
            ->with('PendingMessg',null);

        }else{
            return view('frontend.checkout.payment_pay',[
                'active'=>'none',
                'userPayment'=>$userPayment,
            ])->with('successMessage',null)
            ->with('PendingMessg',null);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $bookPayModel = BookPayments::find($id);
        $bookPayModel->confirmed = 1;
        $bookPayModel->save();

        return redirect()->route('books.show',$bookPayModel->book_id) -> with('status', 'Book Purchased');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
