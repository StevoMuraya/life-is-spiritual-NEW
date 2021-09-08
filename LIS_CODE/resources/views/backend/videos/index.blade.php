@extends('backend.format')

@section('home_content')
    @include('backend.nav')
    @include('backend.videos.popup')
    <div class="main-content">
      <section class="home-slider">
        <h2 class="main-title">Videos Section</h2>
        <div class="add-new-holder">
          <a id="popup_btn" class="add-new-btn">New Video</a>
        </div>
        <div class="sliders-holder">
            
          <div class="sliders-holder">
            @if ($videos->count())
                @foreach ($videos as $video)
                <div class="slider-card video">
                  <div
                    class="slider-img-holder gallery llyv"
                    data-id="{{ $video->video_link }}"
                  ></div>
                  <div class="card-options">
                    <a href="{{ route('videos-admin.show', $video->id) }}" class="edit-card">Edit</a>
                    <form action="{{ route('videos-admin.destroy',$video->id) }}" method="post" class="form-action">
                        @method('DELETE')
                        @csrf
                        <button class="delete-card" style="border: none;padding:1em 2em;cursor: pointer;">Delete</button>
                      </form>
                  </div>
                </div>
                @endforeach
            @endif
          </div>
        </div>
      </section>
    </div>
    <script src="{{ asset('backend/js/llyv.min.js')  }}"></script>
    <script src="{{ asset('backend/js/popup.js')  }}"></script>
@endsection