@extends('backend.format')

@section('home_content')
  <body>
    <div class="admin-container">
        
        @include('backend.nav')
      <div class="main-content">
        <section class="selected-book">
          <h2 class="main-title">Slider Edit</h2>
          <div class="row">
            <div class="data-col">
              <form action="{{ route('home-admin.update',$slider->id) }}" method="post" class="form-action" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="input-holder">
                    <label for="">Slider title</label>
                  <input
                    type="text"
                    value="{{ $slider->title }}"
                    name="slider_title"
                    placeholder="Slider title"
                    class="input-space edit"
                  />
                </div>
                <div class="input-holder">
                    <label for="">Slider sub-title</label>
                  <textarea
                    type="text"
                    rows="8"
                    name="slider_text"
                    placeholder="Slider sub-title"
                    class="input-area edit"
                  >{{ $slider->sub_title }}"</textarea>
                </div>
                <div class="update-image-holder">
                  <img src="/storage/sliders/{{ $slider->slider_image }}" alt="" />
                </div>
                <div class="input-holder">
                  <label for="">Slider image</label>
                  <input type="file" name="slider_image" class="input-space popup" />
                </div>
                <div class="button-holder">
                  <button class="btn-login">Update</button>
                </div>
              </form>
            </div>
            <div class="data-col"></div>
          </div>
        </section>
      </div>
    </div>
  @endsection
