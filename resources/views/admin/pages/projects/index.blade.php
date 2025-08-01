@extends('admin.layouts.app')

@section('title', 'Projetos')

@section('content')

    <!-- Cabeçalho -->
    <section class="content-header">
    
    <div class="container-fluid">
        <div class="container-fluid d-flex justify-content-between alig-items-center">
            <h1 class="mb-4">Gerenciar Projetos</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary w-25 h-25">
                <i class="bi bi-plus"></i> Novo Projeto
            </a>
        </div>
    </div>

    <livewire:admin.projects-table />
    
</section>

@endsection
