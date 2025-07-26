@extends('public.layouts.app')

@section('title', 'Página Inicial')

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif


@section('content')

@include('public.components.banner')
@include('public.components.about')
@include('public.components.aptidoes')
@include('public.components.skills')
@include('public.components.projects')
@include('public.components.posts')

@endsection