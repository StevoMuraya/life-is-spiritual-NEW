
    <section class="book-view">
        <div class="row books-view">
          <div class="data-col">
            <div class="book-img-view-holder">
              <img src="/storage/books/{{ $book->book_cover }}" alt="" />
            </div>
          </div>
          <div class="data-col">
            <div class="view-book-info">
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
                <a href="" class="btn buy-book">Buy Book</a>
              </div>
            </div>
          </div>
        </div>
      </section>

