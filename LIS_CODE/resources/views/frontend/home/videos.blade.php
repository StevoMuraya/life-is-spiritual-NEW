<section class="videos">
    <h1 class="video-title">Youtube Videos</h1>
    <div class="row videos-row">
      <div class="data-col">
        <div class="lates-vid">
          <h2>Latest video</h2>
          <div class="latest-video-holder llyv" data-id="{{ $main_video->video_link }}"></div>
        </div>
      </div>
      <div class="data-col">
        <h2 style="width: 100%">Other videos</h2>
        <div class="other-videos">
            @if ($videos->count())
                @foreach ($videos as $video)          
                    <div
                        class="other-vid-holder llyv other-llvy"
                        data-id="{{ $video->video_link }}">
                    </div>
                @endforeach
            @endif
        </div>
      </div>
    </div>
</section>