@extends('backend.format')

@section('home_content')
<div class="login-container">
  <div class="login-panel">
    <div class="row">
      <div class="data-col line">
        <div class="login-text">
          <div class="logo-holder">
            <img src="{{ asset('/frontend/images/logo.png') }}" alt="" />
          </div>
          <h1 class="lis-title">Life is Spiritual Ministries Registration</h1>
        </div>
      </div>
      <div class="data-col">
        <form action="{{ route('register.store') }}" method="post" class="form-action">
            @csrf
            @if (session('status'))
                <p class="response-message"> {{ session('status') }}</p>
            @endif
          <p class="login-txt">Fill in the form below to register</p>
          <div class="input-holder">
            @error('fullname')
              <p class="input-error">{{ $message }}</p>
            @enderror
            <input
              type="text"
              name="fullname"
              value="{{ old('fullname') }}"
              autocomplete="none"
              placeholder="Full name"
              class="input-space @error('fullname') error  @enderror"
            />
          </div>
          <div class="input-holder">
            @error('email')
              <p class="input-error">{{ $message }}</p>
            @enderror
            <input
              type="email"
              value="{{ old('email') }}"
              name="email"
              autocomplete="none"
              placeholder="Email Address"
              class="input-space @error('email') error  @enderror"
            />
          </div>
          <div class="input-holder">
            @error('phone')
              <p class="input-error">{{ $message }}</p>
            @enderror
            <input type="tel" 
            name="phone" 
            autocomplete="none"
            value="{{ old('phone') }}"
            placeholder="Phone" 
            class="input-space @error('phone') error  @enderror" />
          </div>
          <div class="input-holder">
              @error('password')
                <p class="input-error">{{ $message }}</p>
              @enderror
            <input
              type="password"
              placeholder="Password"
              name="password"
              autocomplete="none"
              class="input-space @error('password') error  @enderror"
            />
          </div>
          <div class="button-holder">
            <button class="btn-login">Register</button>
          </div>
        </form>
        <p class="text-reg">
          Already have an account?
          <a href="{{ route('login.index') }}">Click here</a> to login
        </p>
      </div>
    </div>
  </div>
</div>
@endsection