<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @foreach ($posts as $post)
            <div class="post-preview">
                <a href="{{ URL::to('blog/' . $post->slug) }}">
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $post->subtitle }}
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="{{ URL::to('#') }}">{{ $post->author->name }}</a> on {{ $post->publish_at }}</p>
            </div>
            <hr>
        @endforeach
    </div>
</div>
