<div class="new-popup" id="popup">
    <div class="close-btn" id="close_popup">
        <div class="close"></div>
        <div class="close"></div>
    </div>
    <form
        action="{{ route('videos-admin.store') }}"
        method="post"
        class="form-action popup"
        enctype="multipart/form-data"
    >
        @csrf
        <h3 class="form-title">
            Add video url-link to upload
        </h3>
        <div class="input-holder">
          <input
            type="text"
            name="video_link"
            class="input-space-popup"
            placeholder="Video URL"
          />
        </div>
        <div class="button-holder">
            <button class="btn-login">Upload</button>
        </div>
    </form>
</div>