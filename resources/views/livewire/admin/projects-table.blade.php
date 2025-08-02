<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Projetos ({{ $projects->total() }}/{{ $total }})</h3>
        <div class="d-flex gap-2">
            <!-- Campo de busca -->
            <input type="text" wire:model.live="search" class="form-control" placeholder="Buscar projetos...">

            <!-- Filtro de status -->
            <select wire:model="status" class="form-control">
                <option value="all">Todos</option>
                <option value="published">Publicados</option>
                <option value="draft">Rascunhos</option>
            </select>
        </div>
    </div>

    <div class="card-body position-relative">
        <!-- Spinner -->
        <!-- <div wire:loading.flex wire:target="search,status,page"
            class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center"
            style="top:0; left:0; background: rgba(255,255,255,0.7); z-index:10; min-height:200px;">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Carregando...</span>
            </div>
        </div> -->

        <!-- Tabela -->
        <div wire:loading.remove>
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
                    @forelse($projects as $project)
                    <tr>
                        <td>
                            @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" style="width:60px; height:40px; object-fit:cover;">
                            @else
                            <span class="text-muted">Sem imagem</span>
                            @endif
                        </td>
                        <td>{{ $project->title }}</td>
                        <td>
                            <span class="badge bg-{{ $project->status === 'published' ? 'success' : 'secondary' }}">
                                {{ ucfirst($project->status) }}
                            </span>
                        </td>
                        <td>{{ $project->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Tem certeza que deseja excluir?')"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">
                            <p class="alert alert-info">Nenhum projeto encontrado.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Paginação -->
            <div class="d-flex justify-content-center mt-3">
                {{ $projects->links() }}
            </div>
        </div>
    </div>
</div>
