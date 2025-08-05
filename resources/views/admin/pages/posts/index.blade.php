@extends('admin.layouts.app')

@section('title', 'Gerenciar Posts')

@section('content')
<!-- Cabeçalho -->
    <section class="content-header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1>Posts ({{ $posts->total() }})</h1>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">+ Novo Post</a>
        </div>
    </section>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Status</th>
                    <th>Criado em</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td>
                        @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width:60px; height:40px; object-fit:cover;">
                        @else
                        <span class="text-muted">Sem imagem</span>
                        @endif
                    </td>

                    <td>{{ $post->title }}</td>
                    <td>
                        <span class="badge bg-{{ $post->status === 'publicado' ? 'success' : 'secondary' }}">
                            {{ ucfirst($post->status) }}
                        </span>
                    </td>
                    <td>{{ $post->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post->id_post) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('admin.posts.destroy', $post->id_post) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Excluir este post?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Nenhum post encontrado.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center mt-3">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection