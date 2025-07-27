@extends('public.layouts.app')

@section('title', 'Blog')

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


@section('content')
    <h1 class="text-3xl font-bold">Meu Blog</h1>
    <p class="mt-2 text-gray-700">Aqui você ficará sabendo o que eu posto!!!</p>

    @include('components.timeline')
@endsection