<section class="py-12 bg-navy" id="blog">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Últimos Posts</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($latestPosts as $post)
            <div class="bg-gray-100 rounded-lg shadow hover:shadow-lg transition">
                @if($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="rounded-t-lg w-full h-48 object-cover">
                @endif
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">{{ $post->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4">{{ Str::limit($post->excerpt, 80) }}</p>
                    <a href="{{ route('public.blog.show', $post->slug) }}" class="text-blue-500 font-semibold hover:underline">
                        Ler mais
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-8">
            <a href="{{ route('public.blog.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded">
                Ver todos os posts
            </a>
        </div>
    </div>
</section>
