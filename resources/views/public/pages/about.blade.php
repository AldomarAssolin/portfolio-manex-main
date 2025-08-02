@extends('public.layouts.app')

@section('title', 'Sobre Mim')

@if(session('error'))
<div class="alert alert-danger">
  {{ session('error') }}
</div>
@endif


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
          <li class="breadcrumb-item active">Sobre Mim</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

@include('public.sections.about-content')


@endsection