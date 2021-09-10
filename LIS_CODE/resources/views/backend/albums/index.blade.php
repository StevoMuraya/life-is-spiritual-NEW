@extends('backend.format')

@section('home_content')
    @include('backend.nav')
    @include('backend.albums.popup')
    <div class="main-content">
      <section class="home-slider">
        <h2 class="main-title">Albums</h2>
        <div class="add-new-holder">
          <a id="popup_btn" class="add-new-btn">New Album</a>
        </div>
        <div class="sliders-holder">
          @if ($albums->count())
          @foreach ($albums as $album)
          <div class="slider-card">
            <div class="slider-img-holder">
              <img src="./storage/albums/{{ $album->cover_image }}" alt="" />
            </div>
            <div class="slider-info">
              <h3 class="slider-title">{{ $album->title }}</h3>
              <p class="slider-desc">
                {{ $album->desc }}
              </p>
            </div>
            <div class="card-options">
              <a href="{{ route('albums-admin.show', $album->id) }}" class="edit-card">Photos</a>
              <form action="{{ route('albums-admin.destroy',$album->id) }}" method="post" class="form-action">
                @method('DELETE')
                @csrf
                <button class="delete-card" onclick="return confirm('Are you sure?')" style="border: none;padding:1em 2em;cursor: pointer;">Delete</button>
              </form>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </section>
    </div>
    <script src="{{ asset('backend/js/popup.js')  }}"></script>
@endsection