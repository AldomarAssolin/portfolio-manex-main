<div>
    
    <!-- Filtros -->
    <div class="mb-3 d-flex gap-2">
<input type="text" wire:model.live="search" class="form-control" placeholder="Buscar projetos...">

        <select wire:model="status" class="form-control w-25">
            <option value="">Todos</option>
            <option value="published">Publicado</option>
            <option value="draft">Rascunho</option>
        </select>
    </div>

    <!-- Tabela -->
    <div class="card">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
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
                            <img src="{{ asset('storage/'.$project->image) }}" alt="{{ $project->title }}" width="50" class="img-thumbnail">
                            @else
                            <span class="text-muted">Sem imagem</span>
                            @endif
                        </td>
                        <td>{{ $project->title }}</td>
                        <td>
                            <span class="badge badge-{{ $project->status === 'published' ? 'success' : 'secondary' }}">
                                {{ ucfirst($project->status) }}
                            </span>
                        </td>
                        <td>{{ $project->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Nenhum projeto encontrado.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Paginação -->
        <div class="card-footer">
            {{ $projects->links() }}
        </div>
    </div>
</div>