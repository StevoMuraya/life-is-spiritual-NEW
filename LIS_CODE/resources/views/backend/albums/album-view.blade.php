@extends('backend.format')

@section('home_content')
    @include('backend.nav')
    @include('backend.albums.images-popup')
    <div class="main-content">
      <section class="home-slider">
        <h2 class="main-title">Album View</h2>
        <div class="row">
          <div class="data-col">
            <form action="{{ route('albums-admin.update',$album->id) }}" method="post" class="form-action" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="input-holder">
                  <label for="">Album title</label>
                <input
                  type="text"
                  value="{{ $album->title }}"
                  name="title"
                  placeholder="Book title"
                  class="input-space edit"
                />
              </div>
              <div class="input-holder">
                  <label for="">Album description</label>
                <textarea
                  type="text"
                  rows="8"
                  name="description"
                  placeholder="Book description"
                  class="input-area edit"
                >{{ $album->desc }}"</textarea>
              </div>
              <div class="update-image-holder">
                <img src="../storage/albums/{{ $album->cover_image }}" alt="" />
              </div>
              <div class="input-holder">
                <label for="">Album cover image</label>
                <input type="file" name="cover_image" class="input-space popup" />
              </div>
              <div class="button-holder">
                <button class="btn-login">Update</button>
              </div>
            </form>
          </div>
          <div class="data-col" style="flex: 2">
            
        <div class="add-new-holder">
          <a id="popup_btn" class="add-new-btn">New Images</a>
        </div>
            <div class="sliders-holder">
              @if ($gallery->count())
                  @foreach ($gallery as $image)
                  <div class="slider-card gallery">
                    <div class="slider-img-holder gallery">
                      <img src="../storage/gallery/{{ $image->image_name }}" alt="" />
                    </div>
                    <div class="card-options">
                      <form action="{{ route('gallery-admin.destroy',$image->id) }}" method="post" class="form-action">
                        @method('DELETE')
                        @csrf
                        <button class="delete-card" onclick="return confirm('Are you sure?')"  style="border: none;padding:0.5em 2em;cursor: pointer;">Delete</button>
                      </form>
                    </div>
                  </div>
                  @endforeach
              @endif
          </div>
          </div>
        </div>
      </section>
    </div>
    <script src="{{ asset('backend/js/popup.js')  }}"></script>
@endsection