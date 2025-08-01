@extends('public.layouts.app')

@section('title', 'Página Inicial')

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif


@section('content')

@include('components.hero')
@include('public.sections.about')
@include('public.sections.aptidoes')
@include('public.sections.skills')
@include('public.sections.projects')
@include('public.sections.posts')
@include('components.faq')

@endsection