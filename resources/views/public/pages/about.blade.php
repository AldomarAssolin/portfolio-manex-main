@extends('public.layouts.app')

@section('title', 'Sobre Mim')

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


@section('content')
    <h1 class="text-3xl font-bold">Sobre mim</h1>
    <p class="mt-2 text-gray-700">Aqui você ficará sabendo um pouco mais sobre mim!!!</p>
@endsection