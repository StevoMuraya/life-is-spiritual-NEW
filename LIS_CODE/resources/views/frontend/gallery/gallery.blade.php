<section class="gallery">
    <div class="gallery-holder">
        @if ($gallery->count())
            @foreach ($gallery as $image)
            <div class="gallery-img-holder {{ $image->random_size }}">
                <img src="./storage/gallery/{{ $image->image_name }}" alt="" />
            </div>
            @endforeach
            
        @endif
    </div>
</section>