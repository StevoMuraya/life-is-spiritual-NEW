<section class="header">
    <nav class="navbar">
        <div class="top-nav" id="top_nav">
        <div class="contact-info">
            <a href="" class="phone-no">0712345678</a>
            <a href="" class="email">info@lifeisspiritual.org</a>
        </div>
        <div class="account-info">
            <a href="" class="login-account">Login</a>
            <a href="" class="login-account">Sign-up</a>
        </div>
        </div>
        <div class="mobile-nav" id="mobile_nav">
        <div class="logo-holder">
            <img src="{{ asset('/frontend/images/logo.png')}}" class="logo" alt="" />
        </div>
        <ul class="mobile-links">
            <li class="mobile-lists">
            <a href="index.html" class="mobile-link active">Home</a>
            </li>
            <li class="mobile-lists">
            <a href="about.html" class="mobile-link">About Us</a>
            </li>
            <li class="mobile-lists">
            <a href="books.html" class="mobile-link">Books</a>
            </li>
            <li class="mobile-lists">
            <a href="gallery.html" class="mobile-link">Gallery</a>
            </li>
            <li class="mobile-lists">
            <a href="videos.html" class="mobile-link">Videos</a>
            </li>
            <li class="mobile-lists">
            <a href="blogs.html" class="mobile-link">Blogs</a>
            </li>
            <li class="mobile-lists">
            <a href="contact.html" class="mobile-link">Contact Us</a>
            </li>
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
                    <a href="{{ route('gallery.index') }}" class="list-link active">Gallery</a>
                </li>
            @else
                <li class="list-links">
                    <a href="{{ route('gallery.index') }}" class="list-link">Gallery</a>
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