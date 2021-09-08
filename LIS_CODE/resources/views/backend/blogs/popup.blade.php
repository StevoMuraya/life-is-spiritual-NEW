
      <div class="new-popup" id="popup">
        <div class="close-btn" id="close_popup">
          <div class="close"></div>
          <div class="close"></div>
        </div>
        <form
          action="{{ route('blogs-admin.store') }}"
          method="post"
          class="form-action popup"
          enctype="multipart/form-data"
        >
        @csrf
          <h3 class="form-title">
            Fill in the form to add a blog article book
          </h3>
          <div class="input-holder">
            <input
              type="text"
              name="title"
              class="input-space-popup"
              placeholder="Article title"
            />
          </div>
          <div class="input-holder">
            <input
              type="text"
              name="author"
              class="input-space-popup"
              placeholder="Article author"
            />
          </div>
          <div class="input-holder">
            <textarea
              name="description"
              id=""
              cols="30"
              rows="10"
              placeholder="Article description"
              class="input-area-popup"
            ></textarea>
          </div>
          <div class="input-holder">
            <label for="">Blog cover image</label>
            <input type="file" name="blog_image" class="input-space popup" />
          </div>
          <div class="button-holder">
            <button class="btn-login">Upload</button>
          </div>
        </form>
      </div>