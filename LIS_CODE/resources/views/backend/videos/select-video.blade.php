@extends('backend.format')

@section('home_content')
  <body>
    <div class="admin-container">
        @include('backend.nav')
        <div class="main-content">
            <section class="selected-book">
            <h2 class="main-title">Video Edit</h2>
            <div class="row">
                <div class="data-col">
                    <form action="{{ route('videos-admin.update',$video->id) }}" method="post" class="form-action" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="input-holder">
                            <label for="">Video link</label>
                        <input
                            type="text"
                            value="{{ $video->video_link }}"
                            name="video_link"
                            placeholder="Video link"
                            class="input-space edit"
                        />
                        </div>
                        <div class="button-holder">
                            <button class="btn-login">Update</button>
                        </div>
                    </form>
                </div>
                <div class="data-col"></div>
            </div>
            </section>
        </div>
    </div>
  @endsection
