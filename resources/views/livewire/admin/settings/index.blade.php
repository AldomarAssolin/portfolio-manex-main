@extends('admin.layouts.app')

@section('title', 'Configurações do Site')

@section('content')
    <section>

        <!-- Cabeçalho -->
    <section class="content-header">
    
    <div class="container-fluid">
        <div class="container-fluid d-flex justify-content-between alig-items-center">
            <h1 class="mb-4">Configurações do Site</h1>
            <a href="{{ route('admin.settings.create') }}" class="btn btn-primary w-25 h-25">
                <i class="bi bi-plus"></i> Nova Configuração
            </a>
        </div>
    </div>
    </section>
    
</section>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($settings as $setting)
            <tr>
                <td>{{ $setting->titulo_site }}</td>
                <td>{{ $setting->descricao }}</td>
                <td>
                    <a href="{{ route('admin.settings.edit', $setting->id_config) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('admin.settings.show', $setting->id_config) }}" class="btn btn-info">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection


