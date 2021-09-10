
          <section class="home-slider">
            <h2 class="main-title">Home Section</h2>
            <div class="add-new-holder">
              <a id="popup_btn" class="add-new-btn">New Slider</a>
            </div>
            <div class="sliders-holder">
              @if ($sliders->count())
                @foreach ($sliders as $slider)
                <div class="slider-card">
                  <div class="slider-img-holder">
                    <img src="/storage/sliders/{{ $slider->slider_image }}" alt="" />
                  </div>
                  <div class="slider-info">
                    <h3 class="slider-title">{{ $slider->title }}</h3>
                    <p class="slider-desc">
                      {{ $slider->sub_title }}
                    </p>
                </div>
                <div class="card-options">
                  <a href="{{ route('home-admin.show',$slider->id) }}" class="edit-card">Edit</a>
                  <form action="{{ route('home-admin.destroy',$slider->id) }}" method="post" class="form-action">
                    @method('DELETE')
                    @csrf
                      <button class="delete-card" onclick="return confirm('Are you sure?')" style="border: none;padding:1em 2em;cursor: pointer;">Delete</button>
                  </form>
                  {{-- <a href="" class="delete-card">Delete</a> --}}
                </div>
              </div>
                @endforeach
              @endif
            </div>
          </section>