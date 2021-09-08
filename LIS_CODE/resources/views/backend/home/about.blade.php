<section class="about-us">
    <h2 class="main-title">About us Section</h2>
    <form action="{{ route('about_one') }}" method="post" class="form-action">
        @csrf
        @if ($about_us_one->count())
        <div class="input-holder area">
          <label for="">About Us (Section 1)</label>
          <textarea
            name="about_section_one"
            id=""
            cols="30"
            rows="10"
            placeholder="About Us (Section 1)"
            class="input-area"
          >{{ $about_us_one->about_text }}</textarea>
        </div>
        @else
        <div class="input-holder area">
          <label for="">About Us (Section 1)</label>
          <textarea
            name="about_section_one"
            id=""
            cols="30"
            rows="10"
            placeholder="About Us (Section 1)"
            class="input-area"
          ></textarea>
        </div>
        @endif
      <div class="button-holder">
        <button class="btn-login">Save</button>
      </div>
    </form>
    <form action="{{ route('about_two') }}" method="post" class="form-action">
        @csrf
        @if ($about_us_two!=null)
            <div class="input-holder area">
                <label for="">About Us (Section 2)</label>
                <textarea
                name="about_section_two"
                id=""
                cols="30"
                rows="10"
                placeholder="About Us (Section 2)"
                class="input-area"
                >{{ $about_us_two->about_text }}</textarea>
            </div>
        @else
            <div class="input-holder area">
                <label for="">About Us (Section 2)</label>
                <textarea
                name="about_section_two"
                id=""
                cols="30"
                rows="10"
                placeholder="About Us (Section 2)"
                class="input-area"
                ></textarea>
            </div>
            @endif
      <div class="button-holder">
        <button class="btn-login">Save</button>
      </div>
    </form>
  </section>