@extends('frontend.format')

@section('home_content')
    @include('frontend.nav')
    @include('frontend.videos.header')
    @include('frontend.videos.videos')

    @include('frontend.footer')
    <script src="{{ asset('frontend/js/llyv.min.js')  }}"></script>
@endsection