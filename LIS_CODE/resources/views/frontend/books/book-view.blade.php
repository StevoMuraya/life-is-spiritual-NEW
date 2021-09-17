    <div class="login-popup" id="popup_view">
      <div class="login-popup-panel">
        <h2 class="login-popup-title">Create Account or Login</h2>
        <div class="login-popup-body">
          <p class="login-popup-text">
            We have noticed you have not yet created an account wih us or logged
            in to your account. Please login or create and account below to
            proceed to checkout.
          </p>
          <div class="login-popup-options">
            <a href="{{ route('login.index') }}" class="login-popup-btn login">Login</a>
            <a href="{{ route('register.index') }}" class="login-popup-btn register">Register</a>
          </div>
        </div>
      </div>
    </div>
    <section class="book-view">
        <div class="row books-view" style="margin-top: 3em">
          <div class="data-col">
            <div class="book-img-view-holder">
              <img src="/storage/books/{{ $book->book_cover }}" alt="" />
            </div>
          </div>
          <div class="data-col">
            <div class="view-book-info">
              @if (session('status'))
                <div class="success-text">
                  <p>{{ session('status') }}</p>
                  <br />
                    <a href="{{ route('orders.show',auth()->user()->email) }}" class="view-orders">View Orders</a>
                </div>
              @endif
              <h1 class="book-title">{{ $book->title }}</h1>
              <div class="view-info-split">
                <h4>Author</h4>
                <h4>{{ $book->author }}</h4>
              </div>
              <p class="view-book-desc">
                {{ $book->description }}
              </p>
              <div class="book-buy-options">
                <p class="book-price">Kshs {{ number_format($book->price) }}</p>
                @auth
                  <a href="{{ route('checkout',$book->slug) }}" class="btn buy-book">Buy Book</a>
                @endauth
                @guest
                  <a id="btn_buy" class="btn buy-book">Buy Book</a>
                @endguest
              </div>
            </div>
          </div>
        </div>
      </section>

