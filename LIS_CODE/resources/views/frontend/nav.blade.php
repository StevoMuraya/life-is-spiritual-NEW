<section class="header">
    <nav class="navbar">
        <div class="top-nav" id="top_nav">
        <div class="contact-info">
            <a href="" class="phone-no">0712345678</a>
            <a href="" class="email">info@lifeisspiritual.org</a>
        </div>
        <div class="account-info">
            @guest
                <a href="{{ route('login.index') }}" class="login-account">Login</a>
                <a href="{{ route('register.index') }}" class="login-account">Sign-up</a>
            @endguest

            @auth
                <a href="{{ route('profile.show',auth()->user()->email) }}" class="login-account">{{ auth()->user()->name }}</a>
                <form action="{{ route('exit') }}" method="post">
                    @csrf
                    <button class="login-account" style="background: none;border:none;font-size: 16px;cursor: pointer;">Logout</button>
                </form>
            @endauth
        </div>
        </div>
        <div class="mobile-nav" id="mobile_nav">
        <div class="logo-holder">
            <img src="{{ asset('/frontend/images/logo.png')}}" class="logo" alt="" />
        </div>
        <ul class="mobile-links">
            @if ($active == 'home')
                <li class="mobile-lists">
                    <a href="{{ route('home.index') }}" class="mobile-link active">Home</a>
                </li>
            @else
                <li class="mobile-lists">
                    <a href="{{ route('home.index') }}" class="mobile-link">Home</a>
                </li>
            @endif
            @if ($active == 'about')
                <li class="mobile-lists">
                    <a href="{{ route('about.index') }}" class="mobile-link active">About Us</a>
                </li>
            @else
                <li class="mobile-lists">
                    <a href="{{ route('about.index') }}" class="mobile-link">About Us</a>
                </li>
            @endif
            @if ($active == 'books')
                <li class="mobile-lists">
                    <a href="{{ route('books.index') }}" class="mobile-link active">Books</a>
                </li>
            @else
                <li class="mobile-lists">
                    <a href="{{ route('books.index') }}" class="mobile-link">Books</a>
                </li>
            @endif
            @if ($active == 'gallery')
                <li class="mobile-lists">
                    <a href="{{ route('albums.index') }}" class="mobile-link active">Gallery</a>
                </li>
            @else
                <li class="mobile-lists">
                    <a href="{{ route('albums.index') }}" class="mobile-link">Gallery</a>
                </li>
            @endif
            @if ($active == 'videos')
                <li class="mobile-lists">
                    <a href="{{ route('videos.index') }}" class="mobile-link active">Videos</a>
                </li>
            @else
                <li class="mobile-lists">
                    <a href="{{ route('videos.index') }}" class="mobile-link">Videos</a>
                </li>
            @endif
            @if ($active == 'blogs')
                <li class="mobile-lists">
                    <a href="{{ route('contact.index') }}" class="mobile-link active">Blogs</a>
                </li>
            @else
                <li class="mobile-lists">
                    <a href="{{ route('contact.index') }}" class="mobile-link">Blogs</a>
                </li>
            @endif
            @if ($active == 'contact')
                <li class="mobile-lists">
                    <a href="{{ route('contact.index') }}" class="mobile-link active">Contact Us</a>
                </li>
            @else
                <li class="mobile-lists">
                    <a href="{{ route('contact.index') }}" class="mobile-link">Contact Us</a>
                </li>
            @endif
        </ul>
        </div>
        <div class="main-nav" id="main_nav">
        <div class="logo-holder">
            <img src="{{ asset('/frontend/images/logo.png')}}" class="logo" alt="" />
        </div>
        <ul class="nav-links show">
            @if ($active == 'home')
                <li class="list-links">
                    <a href="{{ route('home.index') }}" class="list-link active">Home</a>
                </li>
            @else
                <li class="list-links">
                    <a href="{{ route('home.index') }}" class="list-link">Home</a>
                </li>
            @endif
            @if ($active == 'about')
                <li class="list-links">
                    <a href="{{ route('about.index') }}" class="list-link active">About Us</a>
                </li>
            @else
                <li class="list-links">
                    <a href="{{ route('about.index') }}" class="list-link">About Us</a>
                </li>
            @endif
            @if ($active == 'books')
                <li class="list-links">
                    <a href="{{ route('books.index') }}" class="list-link active">Books</a>
                </li>
            @else
                <li class="list-links">
                    <a href="{{ route('books.index') }}" class="list-link">Books</a>
                </li>
            @endif
            @if ($active == 'gallery')
                <li class="list-links">
                    <a href="{{ route('albums.index') }}" class="list-link active">Gallery</a>
                </li>
            @else
                <li class="list-links">
                    <a href="{{ route('albums.index') }}" class="list-link">Gallery</a>
                </li>
            @endif
            @if ($active == 'videos')
                <li class="list-links">
                    <a href="{{ route('videos.index') }}" class="list-link active">Videos</a>
                </li>
            @else
                <li class="list-links">
                    <a href="{{ route('videos.index') }}" class="list-link">Videos</a>
                </li>
            @endif
            @if ($active == 'blogs')
                <li class="list-links">
                    <a href="{{ route('blogs.index') }}" class="list-link active">Blogs</a>
                </li>
            @else
                <li class="list-links">
                    <a href="{{ route('blogs.index') }}" class="list-link">Blogs</a>
                </li>
            @endif
            @if ($active == 'contact')
                <li class="list-links">
                    <a href="{{ route('contact.index') }}" class="list-link active">Contact Us</a>
                </li>
            @else
                <li class="list-links">
                    <a href="{{ route('contact.index') }}" class="list-link">Contact Us</a>
                </li>
            @endif
            
        </ul>
        <div class="hamburger" id="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        </div>
    </nav>
    </section>