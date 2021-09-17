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
            <h1 class="lis-title">Life is Spiritual Ministries Login</h1>
          </div>
        </div>
        <div class="data-col">
          <form action="{{ route('login.store') }}" method="post" class="form-action">
            @csrf
            @if (session('status'))
                <p class="response-message"> {{ session('status') }}</p>
            @endif
            <p class="login-txt">Fill in the form below to login</p>
            <div class="input-holder">
                @error('email')
                  <p class="input-error">{{ $message }}</p>
                @enderror
              <input
                type="text"
                name="email"
                placeholder="Email Address"
                class="input-space @error('email') error @enderror"
              />
            </div>
            <div class="input-holder">
                @error('password')
                  <p class="input-error">{{ $message }}</p>
                @enderror
              <input
                type="password"
                name="password"
                placeholder="Password"
                class="input-space @error('password') error @enderror"
              />
            </div>
            <div class="button-holder">
              <button class="btn-login">Login</button>
            </div>
          </form>

          <p class="text-reg">
            Don't have an account?
            <a href="{{ route('register.index') }}">Click here</a> to register
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection