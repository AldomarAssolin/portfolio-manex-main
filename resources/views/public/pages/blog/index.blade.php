@extends('public.layouts.app')

@section('title', 'Blog')

@section('content')

<!-- Main content -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Content Header (Page header) -->
        <section class="content-header my-3">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Todos meus Posts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- ./Content Header (Page header) -->
        <div class="mb-5">
            @foreach($posts as $post)
            <div class="d-flex flex-colunm flex-wrap justify-content-center bg-white py-2 mb-3">
                @if($post->image)
                <img src="{{ $post->image }}" alt="{{ $post->title }}" class="img-fluid rounded">
                @endif
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4">{{ Str::limit($post->excerpt, 100) }}</p>
                    <a href="{{ route('public.blog.show', $post->slug) }}" class="text-blue-500 font-semibold hover:underline">
                        Ler mais
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-8">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection