@extends('admin.layouts.app')

@section('content')
<div class="container">
    <!-- Cabeçalho -->
    <section class="content-header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1>Editar Projeto</h1>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </section>
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        @include('admin.pages.projects.form')
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection