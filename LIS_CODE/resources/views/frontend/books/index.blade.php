@extends('frontend.format')

@section('home_content')
    @include('frontend.nav')
    @include('frontend.books.header')
    @include('frontend.books.books')


    @include('frontend.footer')   
    
    <script src="{{ asset('frontend/js/slider.js')  }}"></script>
@endsection