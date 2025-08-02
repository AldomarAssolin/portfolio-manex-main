@extends('public.layouts.app')

@section('title', $post->title)

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Sobre Mim</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('public.blog.index') }}">Blog</a></li>
          <li class="breadcrumb-item active">{{ Str::limit($post->title, 30) }}</li>
        </ol> 
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="py-5 bg-gray-50">
    <div class="container mx-auto px-4 max-w-4xl">
        <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
        @if($post->image)
        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-64 object-cover rounded mb-4">
        @endif
        <div class="text-gray-700 leading-relaxed">
            {!! nl2br(e($post->content)) !!}
        </div>
    </div>
</section>
@endsection