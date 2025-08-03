@extends('admin.layouts.app')

@section('title', 'Novo Post')

@section('content')
    <!-- Cabeçalho -->
    <section class="content-header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1>Criar Novo Post</h1>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </section>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Criar Post</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="excerpt" class="form-label">Resumo</label>
                <textarea name="excerpt" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Conteúdo</label>
                <textarea name="content" class="form-control" rows="6" required></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Imagem de Capa</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-control" required>
                    <option value="draft">Rascunho</option>
                    <option value="published">Publicado</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
</div>
@endsection
