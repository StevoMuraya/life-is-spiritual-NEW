@extends('frontend.format')

@section('home_content')

@include('frontend.nav')
@include('frontend.profile.header')
  <section class="user-profile">
    <div class="row">
      <div class="data-col">
        <div class="profile-nav-panel">
          <div class="prof-logo">
            <img src="{{ asset('./frontend/images/logo.png')  }}" alt="" />
          </div>
          <ul class="prof-links">
            <li class="prof-lists">
              <a href="{{ route('profile.show',auth()->user()->email) }}" class="prof-link">My Info</a>
            </li>
            {{-- <li class="prof-lists">
              <a href="" class="prof-link">My Cart</a>
            </li> --}}
            <li class="prof-lists">
              <a href="" class="prof-link active">My Orders</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="data-col" style="flex: 4">
        <div class="user-info-holder">
          <div class="row">
            <div class="data-col">
              <div class="orders-holder">
                  @if ($books->count())
                    @foreach ($books as $book)
                    <div class="order-book-card">
                      <div class="order-book-image">
                        <img src="/storage/books/{{ $book->book->book_cover }}" alt="" />
                      </div>
                      <div class="order-book-info">
                        <h4 class="order-book-title">
                            {{ $book->book_title }}
                        </h4>
                        <h5 class="order-book-title">Kshs {{ number_format($book->amount) }}</h5>
                      </div>
                    </div>
                    @endforeach
                      
                  @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection