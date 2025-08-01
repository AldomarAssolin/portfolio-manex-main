@extends('admin.layouts.app')

@section('title', 'Novo Projeto')

@section('content')

    <!-- Cabeçalho -->
    <section class="content-header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1>Criar Novo Projeto</h1>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </div>
    </section>

    <!-- Formulário -->
    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Informações do Projeto</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Título -->
                        <div class="form-group">
                            <label for="title">Título <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" 
                                   class="form-control @error('title') is-invalid @enderror"
                                   value="{{ old('title') }}" placeholder="Digite o título do projeto">
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Descrição -->
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <textarea name="description" id="description" rows="4" 
                                      class="form-control @error('description') is-invalid @enderror"
                                      placeholder="Descreva o projeto">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Link -->
                        <div class="form-group">
                            <label for="link">Link do Projeto</label>
                            <input type="url" name="link" id="link" 
                                   class="form-control @error('link') is-invalid @enderror"
                                   value="{{ old('link') }}" placeholder="https://meuprojeto.com">
                            @error('link')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Rascunho</option>
                                <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Publicado</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Upload de Imagem -->
                        <div class="form-group">
                            <label for="image">Imagem do Projeto</label>
                            <input type="file" name="image" id="image" 
                                   class="form-control-file @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <!-- Botão -->
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Salvar Projeto
                            </button>
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
