<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Lista os projetos.
     */
    public function index()
    {
        $projects = Projeto::latest()->paginate(10);
        return view('admin.pages.projects', compact('projects'));
    }

    /**
     * Formulário de criação.
     */
    public function create()
    {


        // Retorna a view de criação de projeto
        return view('admin.pages.projects.create');
    }

    /**
     * Salva novo projeto.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255|unique:projetos,titulo',
            'descricao' => 'nullable|string',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => ['required', Rule::in(['rascunho', 'concluido'])]
        ]);

        $slug = Str::slug($request->titulo);
        if (Projeto::where('slug', $slug)->exists()) {
            $slug .= '-' . uniqid();
        }

        $imagemPath = $request->hasFile('imagem')
            ? $request->file('imagem')->store('projects', 'public')
            : null;

        Projeto::create([
            'id_usuario'  => Auth::id(),
            'titulo' => $request->titulo,
            'slug' => $slug,
            'descricao' => $request->descricao,
            'status' => $request->status,
            'imagem' => $imagemPath,
            'link' => $request->link,
        ]);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Projeto criado com sucesso!');
    }

    /**
     * Mostra um projeto.
     */
    public function show(Projeto $project)
    {
        return view('admin.pages.projects.show', compact('project'));
    }

    /**
     * Formulário de edição.
     */
    public function edit(Projeto $project)
    {
        return view('admin.pages.projects.edit', compact('project'));
    }

    /**
     * Atualiza um projeto.
     */
    public function update(Request $request, Projeto $project)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => ['required', 'string', 'max:255', Rule::unique('projetos')->ignore($project->id_projeto, 'id_projeto')],
            'descricao' => 'nullable|string',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => ['required', Rule::in(['rascunho', 'concluido'])]
        ]);

        // Gera slug único
        $slug = Str::slug($request->titulo);
        if (Projeto::where('slug', $slug)->where('id_projeto', '!=', $project->id_projeto)->exists()) {
            $slug .= '-' . uniqid();
        }

        // Atualiza a imagem se fornecida
        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('projects', 'public');
            $project->imagem = $imagemPath;
        }

        // Atualiza os dados do projeto
        $project->update([
            'titulo' => $request->titulo,
            'slug' => $slug,
            'descricao' => $request->descricao,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove um projeto.
     */
    public function destroy(Projeto $project)
    {
        if ($project->imagem) {
            Storage::disk('public')->delete($project->imagem);
        }

        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Projeto deletado com sucesso!');
    }

    /**
     * Validação de dados.
     */
    private function validatedData(Request $request, ?Projeto $project = null): array
    {
        return $request->validate([
            'titulo' => [
                'required',
                'string',
                'max:255',
                Rule::unique('projetos', 'titulo')->ignore($project?->id_projeto, 'id_projeto')
            ],
            'descricao' => 'nullable|string',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:em_andamento,concluido',
            'link' => 'nullable|url',
        ]);
    }

    /**
     * Gera slug único.
     */
    private function generateUniqueSlug(string $titulo, ?int $ignoreId = null): string
    {
        $slug = Str::slug($titulo);
        $query = Projeto::where('slug', $slug);
        if ($ignoreId) {
            $query->where('id_projeto', '!=', $ignoreId);
        }
        $exists = $query->exists();

        return $exists ? "{$slug}-" . uniqid() : $slug;
    }
}
