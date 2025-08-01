@extends('public.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header my-3">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $project->title }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">{{ $project->title }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- ./Content Header (Page header) -->
<section class="py-12">
    <div class="container mx-auto px-4 mb-5">
        @if($project->image)
        <img src="{{ asset('storage/' . $project->image) }}" class="img-thumbnail object-cover rounded mb-5">
        @endif
        <h1 class="text-4xl font-bold mb-4">{{ $project->title }}</h1>
        <p class="text-lg text-gray-700 mb-4">{{ $project->description }}</p>
        @if($project->link)
        <a href="{{ $project->link }}" target="_blank"
            class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
            Visitar projeto
        </a>
        @endif
    </div>
</section>
@endsection