<section class="gallery-view">
    <div class="gallery-view-row">
      <div class="gallery-text">
        <h2 class="gallery-view-title">{{ $album->title }}</h2>
        <p class="gallery-view-desc">
         {{ $album->desc }}
        </p>
      </div>
      <div class="gallery-images">
        <div class="gallery-holder gallery-views">
            @if ($gallery->count())
                @foreach ($gallery as $image)
                <div class="gallery-img-holder {{ $image->random_size }}">
                    <img src="../storage/gallery/{{ $image->image_name }}" alt="" />
                </div>
                @endforeach
            @endif
        </div>
      </div>
    </div>
  </section>