
<section class="blogs">
    <h1 class="blogs-title">Blogs &amp; Articles</h1>
    <div class="row blogs-holder">
        @if ($blogs->count())
            @foreach ($blogs as $blog)
                <div class="blog-card">
                    <div class="blog-img-holder">
                        <img src="/storage/blogs/{{ $blog->blog_image }}" alt="" />
                    </div>
                    <div class="blog-text-holder">
                        <p class="blog-date">{{ $blog->created_at->format('jS F Y') }}</p>
                        <h3 class="blog-title">{{ $blog->title }}</h3>
                        <h4 class="blog-author">{{ $blog->author }}</h4>
                        <p class="blog-text-desc">
                            {{ Str::limit($blog->description,200)}}
                        </p>
                        <div class="read-article-holder">
                            <a href="" class="read-article">Read Article</a>
                        </div>
                    </div>
                </div>
            @endforeach
            
        @endif
    </div>
    <a href="{{ route('blogs.index') }}" class="view-more blue">View More</a>
</section>