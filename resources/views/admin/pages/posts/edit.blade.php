@extends('admin.layouts.app')

@section('title', 'Editar Post')

@section('content')
<!-- Cabeçalho -->
<section class="content-header">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <h1>Editar Projeto</h1>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>
</section>
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="excerpt" class="form-label">Resumo</label>
                <textarea name="excerpt" class="form-control" rows="3">{{ $post->excerpt }}</textarea>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Conteúdo</label>
                <textarea name="content" class="form-control" rows="6" required>{{ $post->content }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Imagem de Capa</label>
                @if($post->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" style="max-height: 150px;">
                </div>
                @endif
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-control" required>
                    <option value="draft" {{ $post->status === 'draft' ? 'selected' : '' }}>Rascunho</option>
                    <option value="published" {{ $post->status === 'published' ? 'selected' : '' }}>Publicado</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Atualizar</button>
        </form>
    </div>
</div>
@endsection