@extends('backend.format')

@section('home_content')
  <body>
    <div class="admin-container">
        
        @include('backend.nav')
      <div class="main-content">
        <section class="selected-book">
          <h2 class="main-title">Book Edit</h2>
          <div class="row">
            <div class="data-col">
              <form action="{{ route('books-admin.update',$book->id) }}" method="post" class="form-action" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="input-holder">
                    <label for="">Book title</label>
                  <input
                    type="text"
                    value="{{ $book->title }}"
                    name="title"
                    placeholder="Book title"
                    class="input-space edit"
                  />
                </div>
                <div class="input-holder">
                    <label for="">Book author</label>
                  <input
                    type="text"
                    name="author"
                    placeholder="Book author"
                    value="{{ $book->author }}"
                    class="input-space edit"
                  />
                </div>
                <div class="input-holder">
                    <label for="">Book price</label>
                  <input
                    type="text"
                    name="price"
                    placeholder="Book price"
                    value="{{ $book->price }}"
                    class="input-space edit"
                  />
                </div>
                <div class="input-holder">
                    <label for="">Book description</label>
                  <textarea
                    type="text"
                    rows="8"
                    name="description"
                    placeholder="Book description"
                    class="input-area edit"
                  >{{ $book->description }}"</textarea>
                </div>
                <div class="update-image-holder">
                  <img src="/storage/books/{{ $book->book_cover }}" alt="" />
                </div>
                <div class="input-holder">
                  <label for="">Book cover image</label>
                  <input type="file" name="book_cover" class="input-space popup" />
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
