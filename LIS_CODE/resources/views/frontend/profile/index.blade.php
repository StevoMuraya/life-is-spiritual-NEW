@extends('frontend.format')

@section('home_content')

@include('frontend.nav')
@include('frontend.profile.header')
  <section class="user-profile">
    <div class="row">
      <div class="data-col">
        <div class="profile-nav-panel">
          <div class="prof-logo">
            <img src="{{ asset('./frontend/images/logo.png')  }}" alt="" />
          </div>
          <ul class="prof-links">
            <li class="prof-lists">
              <a href="{{ route('profile.show',auth()->user()->email) }}" class="prof-link active">My Info</a>
            </li>
            {{-- <li class="prof-lists">
              <a href="" class="prof-link">My Cart</a>
            </li> --}}
            <li class="prof-lists">
              <a href="{{ route('orders.show',auth()->user()->email) }}" class="prof-link">My Orders</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="data-col" style="flex: 4">
        <div class="user-info-holder">
          <h2 class="profile-title">Profile Info</h2>

          <div class="row">
            <div class="data-col">
              <div class="display-info-panel">
                <div class="prof-card-holder">
                  <h4 class="prof-info-title">Name:</h4>
                  <p class="prof-info-text">{{ auth()->user()->name }}</p>
                </div>
                <div class="prof-card-holder">
                  <h4 class="prof-info-title">Email:</h4>
                  <p class="prof-info-text">{{ auth()->user()->email }}</p>
                </div>
                <div class="prof-card-holder">
                  <h4 class="prof-info-title">Phone:</h4>
                  <p class="prof-info-text">{{ auth()->user()->phone }}</p>
                </div>
                <div class="prof-card-holder">
                  <h4 class="prof-info-title">Address:</h4>
                  <p class="prof-info-text">{{ auth()->user()->address }}</p>
                </div>
                <div class="prof-card-holder">
                  <h4 class="prof-info-title">Residence:</h4>
                  <p class="prof-info-text">{{ auth()->user()->residence }}</p>
                </div>
                <div class="prof-card-holder">
                  <h4 class="prof-info-title">Country:</h4>
                  <p class="prof-info-text">{{ auth()->user()->country }}</p>
                </div>
                <div class="prof-card-holder">
                  <h4 class="prof-info-title">Postal code:</h4>
                  <p class="prof-info-text">{{ auth()->user()->ppostal_code }}</p>
                </div>
              </div>
            </div>
            <div class="data-col">
              <div class="prof-btn-options">
                <a href="{{ route('profile.edit',auth()->user()->email) }}" class="prof-edit-info"
                  >Edit</a
                >
                <form action="{{ route('exit') }}" method="post">
                    @csrf
                    <button class="prof-edit-info logouts" style="border:none;font-size: 16px;cursor: pointer;">Logout</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection