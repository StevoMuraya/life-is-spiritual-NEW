@extends('backend.auth.format')

@section('auth_format')
<div class="login-container">
    <div class="login-panel">
      <div class="row">
        <div class="data-col line">
          <div class="login-text">
            <div class="logo-holder">
                <img src="{{ asset('backend/images/logo.png')}}" alt="" />
            </div>
            <h1 class="lis-title">
              Life is Spiritual Minitries Admin register
            </h1>
          </div>
        </div>
        <div class="data-col">
          <form action="{{ route('register.store') }}" method="post" class="form-action">
            @csrf
            <p class="login-txt">Fill in the form below to login</p>
            <div class="input-holder">
              <input
                type="text"
                name="fullname"
                placeholder="Full name"
                class="input-space"
              />
            </div>
            <div class="input-holder">
              <input
                type="email"
                name="email"
                placeholder="Email Address"
                class="input-space"
              />
            </div>
            <div class="input-holder">
              <input
                type="password"
                placeholder="Password"
                name="password"
                class="input-space"
              />
            </div>
            <div class="button-holder">
              <button class="btn-login">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection