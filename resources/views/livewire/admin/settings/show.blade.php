@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Cabeçalho -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="container-fluid d-flex justify-content-between alig-items-center">
                <h1 class="mb-4">Visualizar Configuração</h1>
                <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary w-25 h-25">
                    <i class="bi bi-arrow-left"></i> Voltar
                </a>
            </div>
        </div>
    </section>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $setting->titulo_site }}</h5>
            <p class="card-text"><strong>Descrição:</strong> {{ $setting->descricao }}</p>

            <p><strong>Redes Sociais:</strong></p>
            <pre>{{ $setting->redes_sociais }}</pre>

            @if($setting->favicon)
            <p><strong>Favicon:</strong></p>
            <img src="{{ asset('storage/' . $setting->favicon) }}" alt="Favicon" width="64">
            @endif

            <div class="mt-3">
                <a href="{{ route('admin.settings.edit', $setting->id_config) }}" class="btn btn-warning">Editar</a>
                <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</div>
@endsection