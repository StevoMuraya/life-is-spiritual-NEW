@extends('backend.format')

@section('home_content')
<div class="admin-container">
    @include('backend.nav')
    <div class="main-content">

      @include('backend.home.popup')
      @include('backend.home.sliders')
        <div class="space-between"></div>
      @include('backend.home.about')
     
    </div>

  </div>
  <script src="{{ asset('backend/js/popup.js')  }}"></script>
@endsection
    