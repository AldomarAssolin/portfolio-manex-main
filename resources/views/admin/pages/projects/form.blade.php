<div class="card p-3">
    <div class="mb-3">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $project->title ?? '') }}" required>
    </div>
    
    <div class="mb-3">
        <label for="description">Descrição</label>
        <textarea name="description" class="form-control">{{ old('description', $project->description ?? '') }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="link">Link</label>
        <input type="url" name="link" class="form-control" value="{{ old('link', $project->link ?? '') }}">
    </div>
    
    <div class="mb-3">
        <label for="status">Status</label>
        <select name="status" class="form-control">
            <option value="draft" {{ old('status', $project->status ?? '') == 'draft' ? 'selected' : '' }}>Rascunho</option>
            <option value="published" {{ old('status', $project->status ?? '') == 'published' ? 'selected' : '' }}>Publicado</option>
        </select>
    </div>
    
    <div class="mb-3">
        <label for="image">Imagem</label>
        <input type="file" name="image" class="form-control">
        @if(isset($project) && $project->image)
            <img src="{{ asset('storage/'.$project->image) }}" alt="" width="100" class="mt-2">
        @endif
    </div>
</div>
