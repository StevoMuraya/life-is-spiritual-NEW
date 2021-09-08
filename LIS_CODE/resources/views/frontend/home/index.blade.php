@extends('frontend.format')

@section('home_content')
    @include('frontend.nav')
    @include('frontend.home.slider')
    @include('frontend.home.about')
    @include('frontend.home.books')
    @include('frontend.home.blogs')
    @include('frontend.home.videos')
    @include('frontend.home.testimony')


    @include('frontend.footer')   
    
    <script src="{{ asset('frontend/js/slider.js')  }}"></script>
    <script src="{{ asset('frontend/js/testimony-slider.js')  }}"></script>
    <script src="{{ asset('frontend/js/llyv.min.js')  }}"></script>
@endsection