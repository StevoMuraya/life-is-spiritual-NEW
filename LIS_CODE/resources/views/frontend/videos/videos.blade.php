    <section class="videos-section">
        <div class="videos-holder">
            @if ($videos->count())
                @foreach ($videos as $video)
                    <div class="video-card">
                        <div class="video-img-holder llyv" data-id="{{ $video->video_link }}"></div>
                        <div class="video-info">
                            <?php 
                                    $html = 'https://www.googleapis.com/youtube/v3/videos?id=' . $video->video_link . '&key=AIzaSyB753UcpaoS8ISh_qI4Uq_E1kS63NgbQ18&part=snippet';
                                    $response = file_get_contents($html);
                                    $decoded = json_decode($response, true);
                                    foreach ($decoded['items'] as $items) {
                                        $title = $items['snippet']['title'];
                                        $published = $items['snippet']['publishedAt'];
                            ?>
                                    <h3 class="videos-title">{{ $title }}</h3>
                                    <p class="videos-date">{{ Str::limit($published,10) }}</p>
                            <?php
                                    }
                            ?>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
      </section>