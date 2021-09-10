<section class="photo-album">
    <h2 class="gallery-title">Photo Gallery</h2>
    <div class="album-holder">
        @if ($albums->count())
            @foreach ($albums as $album)
            <div class="album-card" onclick="location.href='{{ route('albums.show',$album->id) }}'">
              <div class="album-row">
                <div class="album-images">
                  <div class="top-album-image">
                    <div class="album-img-holder">
                      <img src="./storage/albums/{{ $album->cover_image }}" alt="" />
                    </div>
                  </div>
                  <div class="other-album-images">
                    {{-- @if ($gallerys->count())
                        @foreach ($gallerys as $gallery)
                          <div class="album-img-holder">
                            <img src="./images/article.jpeg" alt="" />
                          </div>
                        @endforeach
                    @endif --}}
                  </div>
                </div>
                <div class="album-text">
                  <h3 class="album-title">{{ $album->title }}</h3>
                  <p class="album-date">{{ $album->created_at->format('jS F Y') }}</p>
                  <p class="album-desc">
                    {{ $album->desc }}
                  </p>
                </div>
              </div>
            </div>
            @endforeach
        @endif
    </div>
  </section>