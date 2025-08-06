<div class="card p-3">
    <div class="mb-3">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" value="{{ old('titulo', $project->titulo ?? '') }}" required>
    </div>
    
    <div class="mb-3">
        <label for="description">Descrição</label>
        <textarea name="description" class="form-control">{{ old('description', $project->descricao ?? '') }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="link">Link</label>
        <input type="url" name="link" class="form-control" value="{{ old('link', $project->link ?? '') }}">
    </div>
    
    <div class="mb-3">
        <label for="status">Status</label>
        <select name="status" class="form-control">
            <option value="em_andamento" {{ old('status', $project->status ?? '') == 'em_andamento' ? 'selected' : '' }}>Em_andamento</option>
            <option value="concluido" {{ old('status', $project->status ?? '') == 'concluido' ? 'selected' : '' }}>Concluido</option>
        </select>
    </div>
    
    <div class="mb-3">
        <label for="image">Imagem</label>
        <input type="file" name="image" class="form-control">
        @if(isset($project) && $project->imagem)
            <img src="{{ asset('storage/'.$project->imagem) }}" alt="{{$project->titulo}}" width="100" class="mt-2">
        @endif
    </div>
</div>
