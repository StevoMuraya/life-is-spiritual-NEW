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
          <h1 class="lis-title">Life is Spiritual Minitries Admin Login</h1>
        </div>
      </div>
      <div class="data-col">
        <form action="{{ route('login-admin.store') }}" method="post" class="form-action">
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
              placeholder="Email Address"
              autocomplete="none"
              name="email"
              class="input-space  @error('email') error  @enderror"
            />
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
            <button class="btn-login">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
