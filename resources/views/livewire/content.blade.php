<div class="left-nav">
    <div class="posts">
        @foreach ($contents as $cont)
            <div class="post">
                <a href="./single-post.html">
                    <img src="https://source.unsplash.com/500x400?{{ $cont->category->name }}" alt="image"
                        class="img img-highlights">
                </a>
                <a href="./single-post.html" class="link-dark">
                    <p>{{ $cont->title }}</p>
                </a>
                {{-- <p class="content">{{ $cont->slug }}</p> --}}
                <div class="slide-info">
                    <img src="/image/2.jpg" alt="auther image" class="img auther-img">
                    <small class="text-muted">
                        <span class="slide-info-item auther-name">by
                            <a href="#" class="link-dark font-size-3">{{ $cont->author->name }}</a>
                        </span>.
                        <span class="slide-info-item date-pub">{{ $cont->created_at->diffForHumans() }}</span>
                    </small>
                </div>
            </div>
        @endforeach
    </div>
    <div class="load-more">
        <a class="load-btn" wire:click="loadmore">Load more post <i class="ri-arrow-down-circle-line"></i></a>
    </div>
</div>
