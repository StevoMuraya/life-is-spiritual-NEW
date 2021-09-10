      <div class="new-popup" id="popup">
        <div class="close-btn" id="close_popup">
          <div class="close"></div>
          <div class="close"></div>
        </div>
        <form
          action="{{ route('albums-admin.store') }}"
          method="post"
          class="form-action popup"
          enctype="multipart/form-data"
        >
            @csrf
            <h3 class="form-title">
                Fill in form to create new album
            </h3>
            <div class="input-holder">
              <input
                type="text"
                name="title"
                class="input-space-popup"
                placeholder="Album title"
              />
            </div>
            <div class="input-holder">
              <textarea
                name="description"
                id=""
                cols="30"
                rows="10"
                placeholder="Album description"
                class="input-area-popup"
              ></textarea>
            </div>
            
            <div class="input-holder">
              <label for="">Book cover image</label>
              <input type="file" name="cover_image" class="input-space popup" />
            </div>
            <div class="button-holder">
                <button class="btn-login">Create</button>
            </div>
        </form>
      </div>