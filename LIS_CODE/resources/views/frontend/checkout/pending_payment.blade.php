@extends('frontend.format')

@section('home_content')
    @include('frontend.nav')
    
    <section class="smaller-landing">
        <div class="small-landing-img-holder">
            <img src="{{ asset('./frontend/images/give1-new.jpg') }}" alt="" />
        </div>
        <div class="small-landing-text">
          <h2 class="small-landing-title">Pay Process</h2>
          <p class="small-landing-desc">Complete payment to place order...</p>
        </div>
      </section>
  
      <section class="payments">
        <div class="payments-row">
          <div class="payments-panel">
            <div class="payments-panel-header">
              <h2 class="payment-title">Payment Info</h2>
                @if (session('status'))
                    <div class="warning-text">{{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="payments-panel-body">
              <p class="payment-desc">
                A payment request has been sent to
                <span class="phone-payment">+{{ $userPayment->phone }}</span>.<br />Once you've
                completed the transaction press the refresh button to check your
                trasaction status
              </p>
  
              <div class="payment-info">
                <div class="payment-holder">
                  <h4 class="payment-title">Book Title:</h4>
                  <p class="payment-text">{{ $userPayment->book_title }}</p>
                </div>
                <div class="payment-holder">
                  <h4 class="payment-title">Receipt:</h4>
                  <p class="payment-text">{{ $userPayment->transaction_id }}</p>
                </div>
                <div class="payment-holder">
                  <h4 class="payment-title">Phone:</h4>
                  <p class="payment-text">{{ $userPayment->phone }}</p>
                </div>
                <div class="payment-holder">
                  <h4 class="payment-title">Status:</h4>
                    <p class="payment-text" style="color: #ff0000">Not Confirmed</p>
                </div>
              </div>
  
              <a href="" class="refresh-page">Refresh</a>
            </div>
          </div>
        </div>
      </section>
  
    @include('frontend.footer')
@endsection