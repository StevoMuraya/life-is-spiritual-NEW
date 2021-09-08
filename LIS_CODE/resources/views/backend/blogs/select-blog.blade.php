@extends('backend.format')

@section('home_content')
  <body>
    <div class="admin-container">
        
        @include('backend.nav')
      <div class="main-content">
        <section class="selected-book">
          <h2 class="main-title">Article Edit</h2>
          <div class="row">
            <div class="data-col">
              <form action="{{ route('blogs-admin.update',$blog->id) }}" method="post" class="form-action" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="input-holder">
                    <label for="">Blog title</label>
                  <input
                    type="text"
                    value="{{ $blog->title }}"
                    name="title"
                    placeholder="Book title"
                    class="input-space edit"
                  />
                </div>
                <div class="input-holder">
                    <label for="">Blog author</label>
                  <input
                    type="text"
                    name="author"
                    placeholder="Book author"
                    value="{{ $blog->author }}"
                    class="input-space edit"
                  />
                </div>
                <div class="input-holder">
                    <label for="">Blog description</label>
                  <textarea
                    type="text"
                    rows="8"
                    name="description"
                    placeholder="Book description"
                    class="input-area edit"
                  >{{ $blog->description }}"</textarea>
                </div>
                <div class="update-image-holder">
                  <img src="/storage/blogs/{{ $blog->blog_image }}" alt="" />
                </div>
                <div class="input-holder">
                  <label for="">Blog cover image</label>
                  <input type="file" name="blog_image" class="input-space popup" />
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
