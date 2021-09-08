@extends('backend.format')

@section('home_content')
    @include('backend.nav')
    @include('backend.gallery.popup')
    <div class="main-content">
      <section class="home-slider">
        <h2 class="main-title">Gallery Section</h2>
        <div class="add-new-holder">
          <a id="popup_btn" class="add-new-btn">New Image</a>
        </div>
        <div class="sliders-holder">
            @if ($gallery->count())
                @foreach ($gallery as $image)
                <div class="slider-card gallery">
                  <div class="slider-img-holder gallery">
                    <img src="./storage/gallery/{{ $image->image_name }}" alt="" />
                  </div>
                  <div class="card-options">
                    <form action="{{ route('gallery-admin.destroy',$image->id) }}" method="post" class="form-action">
                      @method('DELETE')
                      @csrf
                      <button class="delete-card" style="border: none;padding:0.5em 2em;cursor: pointer;">Delete</button>
                    </form>
                    {{-- <a href="" class="delete-card">Delete</a> --}}
                  </div>
                </div>
                @endforeach
            @endif
        </div>
      </section>
    </div>
    <script src="{{ asset('backend/js/popup.js')  }}"></script>
@endsection