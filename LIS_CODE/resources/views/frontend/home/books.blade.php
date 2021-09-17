<section class="books-preview">
    <h1 class="books-title">Our latest E-books</h1>
    <div class="row books">
        <div class="data-col">
            <div class="other-books-holder">
                @if ($books->count())
                    @foreach ($books as $book)
                        <div class="book-card">
                            <div class="hover-img-card">
                                <img src="/storage/books/{{ $book->book_cover }}" alt="" />
                            </div>
                            <div class="other-book-img">
                                <img src="./storage/books/{{ $book->book_cover }}" alt="" />
                            </div>
                            <div class="other-book-text">
                                <h3 class="other-book-title">{{ $book->title }}</h3>
                                <h3 class="other-book-author">{{ $book->author }}</h3>
                                <p class="other-book-desc">
                                    {{ Str::limit($book->description,200)}}
                                </p>
                                <div class="get-book-holder">
                                <a href="{{ route('books.show',$book->slug) }}" class="get-book">VIEW BOOK</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                @endif
            </div>
        <a href="{{ route('books.index') }}" class="view-more">View More</a>
        </div>
    </div>
    </section>