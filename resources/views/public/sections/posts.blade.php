<section class="posts py-5 bg-navy">
    <div class="container">
        <h2 class="mb-4">Últimos Posts</h2>

        <div class="row">
            <!-- Post 1 -->
            @foreach($latestPosts as $post)
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-img">
                        @if($post->image)
                        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="card-img-top">
                        @endif
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text mt-2">
                            {{ Str::limit($post->excerpt, 80) }}
                        </p>
                    </div>
                    <div class="d-flex justify-content-between align-items-end py-3">
                        <a href="{{ route('public.blog.show', $post->slug) }}" class="btn btn-sm btn-outline-primary m-auto">Ler Mais</a>
                        <small class="text-muted m-auto">{{ $post->created_at->format('d M Y') }}</small>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="text-center mt-8">
                <a href="{{ route('public.blog.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded">
                    Ver todos os posts
                </a>
            </div>

        </div>
    </div>
</section>