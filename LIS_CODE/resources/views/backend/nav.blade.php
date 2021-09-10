
<div class="side-pane">
    <div class="top-part">
      <div class="logo-holder">
          <img src="{{ asset('backend/images/logo.png')}}" alt="" />
      </div>
      <ul class="links">
          @if ($active == 'home')
            <li class="list-links">
                <a href="{{ route('home-admin.index') }}" class="link active">Home</a>
            </li>
          @else
            <li class="list-links">
                <a href="{{ route('home-admin.index') }}" class="link">Home</a>
            </li>
          @endif

          @if ($active == 'about')
            <li class="list-links">
                <a href="{{ route('about-admin.index') }}" class="link active">About</a>
            </li>
          @else
            <li class="list-links">
                <a href="{{ route('about-admin.index') }}" class="link">About</a>
            </li>
          @endif
          @if ($active == 'books')
            <li class="list-links">
                <a href="{{ route('books-admin.index') }}" class="link active">Books</a>
            </li>
          @else
            <li class="list-links">
                <a href="{{ route('books-admin.index') }}" class="link ">Books</a>
            </li>
          @endif
          @if ($active == 'albums')
            <li class="list-links">
                <a href="{{ route('albums-admin.index') }}" class="link active">Photos</a>
            </li>
          @else
            <li class="list-links">
                <a href="{{ route('albums-admin.index') }}" class="link">Photos</a>
            </li>
          @endif
          @if ($active == 'blogs')
            <li class="list-links">
                <a href="{{ route('blogs-admin.index') }}" class="link active">Blogs</a>
            </li>
          @else
            <li class="list-links">
                <a href="{{ route('blogs-admin.index') }}" class="link">Blogs</a>
            </li>
          @endif
          @if ($active == 'videos')
            <li class="list-links">
                <a href="{{ route('videos-admin.index') }}" class="link active">Videos</a>
            </li>
          @else
            <li class="list-links">
                <a href="{{ route('videos-admin.index') }}" class="link">Videos</a>
            </li>
          @endif
          @if ($active == 'contact')
            <li class="list-links">
                <a href="gallery.html" class="link active">Messages</a>
            </li>
          @else
            <li class="list-links">
                <a href="gallery.html" class="link">Messages</a>
            </li>
          @endif
          @if ($active == 'testimonies')
            <li class="list-links">
                <a href="gallery.html" class="link active">Testimonies</a>
            </li>
          @else
            <li class="list-links">
                <a href="gallery.html" class="link">Testimonies</a>
            </li>
          @endif
          @if ($active == 'admin')
            <li class="list-links">
                <a href="{{ route('register-admin.index') }}" class="link active">New admin</a>
            </li>
          @else
            <li class="list-links">
                <a href="{{ route('register-admin.index') }}" class="link">New admin</a>
            </li>
          @endif
      </ul>
    </div>
    <div class="lower-part">
      <ul class="links">
        <li class="list-links">
            <form action="{{ route('logout') }}" method="post" class="form-action">
                @csrf
                <button class="link logout" 
              style="border: none;cursor: pointer;"
              >
              Logout
            </button>
            </form>
        </li>
      </ul>
    </div>
  </div>