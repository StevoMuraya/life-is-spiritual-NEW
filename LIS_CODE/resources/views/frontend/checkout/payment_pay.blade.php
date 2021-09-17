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
              <h2 class="payment-title-title">Payment Info</h2>
                @if(!empty($PendingMessg))
                    <div class="warning-text">{{ $PendingMessg }}
                    </div>
                @endif
                @if(!empty($successMessage))
                    <div class="success-text">{{ $successMessage }}
                    </div>
                @endif
            </div>
            <div class="payments-panel-body">
              <p class="payment-desc">                
                  @if(!empty($PendingMessg))
                      @if(!empty($successMessage))
                        @else    
                        A payment request has been sent
                        <br />
                        Once you've completed the transaction press the refresh button to check your
                        trasaction status
                      @endif
                  @else
                        @if(!empty($successMessage))
                          @else    
                          A payment request has been sent
                          <br />
                          Once you've completed the transaction press the refresh button to check your
                          trasaction status
                        @endif
                  @endif
              </p>
              @if(!empty($PendingMessg))
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
                  <form action="{{ route('payments.update',$userPayment->id) }}" method="post" class="form-action">
                      @method('PUT')
                      @csrf
                      <button class="refresh-page" style="border: none;cursor: pointer;">Confirm Payment</button>
                  </form>
                @else
                    @if(!empty($successMessage))
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
                        <form action="{{ route('payments.update',$userPayment->id) }}" method="post" class="form-action">
                            @method('PUT')
                            @csrf
                            <button class="refresh-page" style="border: none;cursor: pointer;">Confirm Payment</button>
                        </form>
                    @else
                        <a href="{{ route('payments.index') }}" class="refresh-page">Refresh</a>
                    @endif
                @endif
            </div>
          </div>
        </div>
      </section>
  
    @include('frontend.footer')
@endsection