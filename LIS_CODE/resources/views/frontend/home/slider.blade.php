<section class="landing-page">
  <div class="slides">
    @if ($sliders->count())
      @foreach ($sliders as $slider)      
        <div class="slider-holder active">
          <div class="slider-img-holder">
            <img src="./storage/sliders/{{ $slider->slider_image }}" alt="" class="sliding-img" />
          </div>
          <div class="slider-text-holder">
            <h1 class="slider-title">
              {{ $slider->title }}
            </h1>
            <p class="slider-sub-title">
              {{ $slider->sub_title }}
            </p>
          </div>
        </div>
      @endforeach
        
    @endif
  </div>
  <div class="slide-indicators" id="slide_indicators"></div>

  <div class="slider-navigation">
    <div class="prev-slide" id="prev_slide">
      <i class="fas fa-chevron-left"></i>
    </div>
    <div class="next-slide" id="next_slide">
      <i class="fas fa-chevron-right"></i>
    </div>
  </div>
</section>