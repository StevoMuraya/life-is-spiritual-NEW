@extends('backend.format')

@section('home_content')
<div class="admin-container">
        @include('backend.nav')
    <div class="main-content">
        @include('backend.books.popup')
      <section class="home-slider">
        <h2 class="main-title">Books Section</h2>
        <div class="add-new-holder">
          <a id="popup_btn" class="add-new-btn">New Book</a>
        </div>
        <div class="sliders-holder">
          @if ($books->count())
          @foreach ($books as $book)
          <div class="slider-card">
            <div class="slider-img-holder">
              <img src="./storage/books/{{ $book->book_cover }}" alt="" />
            </div>
            <div class="slider-info">
              <h3 class="slider-title">{{ $book->title }}</h3>
              <h3 class="slider-price">{{ $book->price }}</h3>
              <p class="slider-desc">
                {{ $book->description }}
              </p>
            </div>
            <div class="card-options">
              <a href="{{ route('books-admin.show', $book->slug) }}" class="edit-card">Edit</a>
              <form action="{{ route('books-admin.destroy',$book->id) }}" method="post" class="form-action">
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
  </div>
  <script src="{{ asset('backend/js/popup.js')  }}"></script>
@endsection