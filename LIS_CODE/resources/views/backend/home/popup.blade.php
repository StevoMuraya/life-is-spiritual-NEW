
      <div class="new-popup" id="popup">
        <div class="close-btn" id="close_popup">
          <div class="close"></div>
          <div class="close"></div>
        </div>
        <form
          action="{{ route('home-admin.store') }}"
          method="post"
          class="form-action popup"
          enctype="multipart/form-data"
        >
        @csrf
          <h3 class="form-title">
            Fill in the form to add new slider content
          </h3>
          <div class="input-holder">
            <input
              type="text"
              name="slider_title"
              class="input-space-popup"
              placeholder="Slider Title"
            />
          </div>
          <div class="input-holder">
            <textarea
              id=""
              cols="30"
              name="slider_text"
              rows="10"
              placeholder="Slider Text"
              class="input-area-popup"
            ></textarea>
          </div>
          <div class="input-holder">
            <label for="slider_image">Slider Image</label>
            <input id="slider_image" type="file" name="slider_image" class="input-space popup" />
          </div>
          <div class="button-holder">
            <button class="btn-login">Upload</button>
          </div>
        </form>
      </div>