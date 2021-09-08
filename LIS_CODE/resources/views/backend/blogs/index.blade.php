@extends('backend.format')

@section('home_content')
    @include('backend.nav')
    <div class="main-content">
        @include('backend.blogs.popup')
      <section class="home-slider">
        <h2 class="main-title">Blogs Section</h2>
        <div class="add-new-holder">
          <a id="popup_btn" class="add-new-btn">New Article</a>
        </div>
        <div class="sliders-holder">
            @if ($blogs->count())
            @foreach ($blogs as $blog)
            <div class="slider-card">
              <div class="slider-img-holder">
                <img src="./storage/blogs/{{ $blog->blog_image }}" alt="" />
              </div>
              <div class="slider-info">
                <h3 class="slider-title">{{ $blog->title }}</h3>
                <h3 class="slider-price">{{ $blog->author }}</h3>
                <p class="slider-desc">
                  {{ $blog->description }}
                </p>
                </div>
                <div class="card-options">
                <a href="{{ route('blogs-admin.show', $blog->id) }}" class="edit-card">Edit</a>
                <form action="{{ route('blogs-admin.destroy',$blog->id) }}" method="post" class="form-action">
                    @method('DELETE')
                    @csrf
                    <button class="delete-card" style="border: none;padding:1em 2em;cursor: pointer;">Delete</button>
                </form>
                {{-- <a href="{{ route('books.destroy',$book->id) }}" class="delete-card">Delete</a> --}}
                </div>
            </div>
            @endforeach
            @endif
        </div>
      </section>
    </div>
  </div>
  <script src="{{ asset('backend/js/popup.js')  }}"></script>
@endsection