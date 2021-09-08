@extends('frontend.format')

@section('home_content')
    @include('frontend.nav')
    @include('frontend.about.header')
    
    <section class="about-us">
        <h1 class="about-title">LIFE IS SPIRITUAL PUBLISHING MINISTRIES</h1>
        <div class="row">
          <div class="data-col">
            <div class="about-img-holder">
              <img src="./frontend/images/logo_new.png" alt="" />
            </div>
          </div>
          <div class="data-col">
            <p class="about-text">
                {{ $about_one->about_text }}
            </p>
          </div>
        </div>
        <div class="row">
          <p class="about-text other">
            {{ $about_two->about_text }}
          </p>
        </div>
      </section>
      
    <section class="about-us">
        <div class="row">
          <div class="data-col">
            <p class="about-text">
                {{ $about_three->about_text }}
            </p>
          </div>
          <div class="data-col">
            <div class="about-img-holder">
              <img src="./frontend/images/wedding1.jpg" alt="" />
            </div>
          </div>
        </div>
  
        @include('frontend.testimony')
  
        <div class="row">
          <p class="about-text other">
            {{ $about_four->about_text }}
          </p>
        </div>
        <div class="row">
          <p class="about-text other">
            {{ $about_five->about_text }}
          </p>
        </div>
      </section>
    @include('frontend.footer')
    <script src="{{ asset('frontend/js/testimony-slider.js')  }}"></script>
@endsection