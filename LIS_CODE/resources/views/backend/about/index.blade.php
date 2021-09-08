@extends('backend.format')

@section('home_content')
<div class="admin-container">
    @include('backend.nav')
    <div class="main-content">
      <section class="about-us">
        <h2 class="main-title">About us Section</h2>
        <form action="{{ route('about_us_one') }}" method="post" class="form-action">
            @csrf
            <div class="input-holder area">
                <label for="">About Us (First Section)</label>
                @if ($about_one !=null)
                <textarea
                name="about_one"
                id=""
                cols="30"
                rows="10"
                placeholder="About Us (First Section)"
                class="input-area"
                >{{ $about_one->about_text }}</textarea>
                @else
                <textarea
                name="about_one"
                id=""
                cols="30"
                rows="10"
                placeholder="About Us (First Section)"
                class="input-area"
                ></textarea>
                @endif
            </div>
            <div class="button-holder">
                <button class="btn-login">Save</button>
            </div>
        </form>
        <form action="{{ route('about_us_two') }}" method="post" class="form-action">
            @csrf
            <div class="input-holder area">
                <label for="">About Us (Second Section)</label>
                @if ($about_two !=null)
                <textarea
                name="about_two"
                id=""
                cols="30"
                rows="10"
                placeholder="About Us (Second Section)"
                class="input-area"
                >{{ $about_two->about_text }}</textarea>
                @else
                <textarea
                name="about_two"
                id=""
                cols="30"
                rows="10"
                placeholder="About Us (Second Section)"
                class="input-area"
                ></textarea>
                @endif
            </div>
            <div class="button-holder">
                <button class="btn-login">Save</button>
            </div>
        </form>
        <form action="{{ route('about_us_three') }}" method="post" class="form-action">
            @csrf
            <div class="input-holder area">
                <label for="">About Us (Third Section)</label>
                @if ($about_three!=null)
                    <textarea
                    name="about_three"
                    id=""
                    cols="30"
                    rows="10"
                    placeholder="About Us (Third Section)"
                    class="input-area"
                    >{{ $about_three->about_text }}</textarea>
                @else
                    <textarea
                    name="about_three"
                    id=""
                    cols="30"
                    rows="10"
                    placeholder="About Us (Third Section)"
                    class="input-area"
                    ></textarea>
                @endif
            </div>
            <div class="button-holder">
                <button class="btn-login">Save</button>
            </div>
        </form>
        <form action="{{ route('about_us_four') }}" method="post" class="form-action">
            @csrf
            <div class="input-holder area">
                <label for="">About Us (Forth Section)</label>
                @if ($about_four !=null)
                <textarea
                name="about_four"
                id=""
                cols="30"
                rows="10"
                placeholder="About Us (Forth Section)"
                class="input-area"
                >{{ $about_four->about_text }}</textarea>
                @else
                <textarea
                name="about_four"
                id=""
                cols="30"
                rows="10"
                placeholder="About Us (Forth Section)"
                class="input-area"
                ></textarea>
                @endif
            </div>
            <div class="button-holder">
                <button class="btn-login">Save</button>
            </div>
        </form>
        <form action="{{ route('about_us_five') }}" method="post" class="form-action">
            @csrf
            <div class="input-holder area">
                <label for="">About Us (Fifth Section)</label>
                @if ($about_five !=null)
                <textarea
                name="about_five"
                id=""
                cols="30"
                rows="10"
                placeholder="About Us (Fifth Section)"
                class="input-area"
                >{{ $about_five->about_text }}</textarea>
                @else
                <textarea
                name="about_five"
                id=""
                cols="30"
                rows="10"
                placeholder="About Us (Fifth Section)"
                class="input-area"
                ></textarea>
                @endif
            </div>
            <div class="button-holder">
                <button class="btn-login">Save</button>
            </div>
        </form>
      </section>
    </div>
  </div>
@endsection