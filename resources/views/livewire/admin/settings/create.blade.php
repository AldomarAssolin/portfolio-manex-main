@extends('admin.layouts.app')



@section('content')
<section>
    <!-- Cabeçalho -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="container-fluid d-flex justify-content-between alig-items-center">
                <h1 class="mb-4">Criar Configuração</h1>
                <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary w-25 h-25">
                    <i class="bi bi-arrow-left"></i> Voltar
                </a>
            </div>
        </div>
    </section>

    {{-- Exibir mensagens de validação --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="titulo_site" class="form-label">Título do Site</label>
            <input type="text" name="titulo_site" id="titulo_site" class="form-control" value="{{ old('titulo_site') }}" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" rows="3">{{ old('descricao') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="redes_sociais" class="form-label">Redes Sociais (JSON)</label>
            <textarea name="redes_sociais" id="redes_sociais" class="form-control" rows="3" placeholder='{"linkedin":"url","github":"url"}'>{{ old('redes_sociais') }}</textarea>
            <small class="text-muted">Formato: {"linkedin":"url","github":"url"}</small>
        </div>

        <div class="mb-3">
            <label for="favicon" class="form-label">Favicon</label>
            <input type="file" name="favicon" id="favicon" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    </div>
</section>
@endsection