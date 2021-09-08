      <div class="new-popup" id="popup">
        <div class="close-btn" id="close_popup">
          <div class="close"></div>
          <div class="close"></div>
        </div>
        <form
          action="{{ route('gallery-admin.store') }}"
          method="post"
          class="form-action popup"
          enctype="multipart/form-data"
        >
            @csrf
            <h3 class="form-title">
                Select an image to upload to gallery
            </h3>
            <div class="input-holder">
                <label for="">Select image</label>
                <input type="file" name="image_name" class="input-space popup" />
            </div>
            <div class="button-holder">
                <button class="btn-login">Upload</button>
            </div>
        </form>
      </div>