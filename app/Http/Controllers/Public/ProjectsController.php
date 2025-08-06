<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProjectsController extends Controller
{
    // Lista com paginação
    public function index()
    {
        $projects = Projeto::where('status', 'concluido')
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('public.pages.projects.index', compact('projects'));
    }

    // Exibe formulário de criação
    public function create()
    {
        return view('public.pages.projects.create');
    }

    // Salva novo projeto
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
            'titulo' => $request->titulo,
            'slug' => $slug,
            'descricao' => $request->descricao,
            'imagem' => $imagemPath,
            'status' => $request->status,
            'link' => $request->link,
        ])->save();

        return redirect()->route('public.pages.projects.index')->with('success', 'Projeto criado com sucesso!');
    }

    // Exibe formulário de edição
    public function edit(Projeto $project)
    {
        return view('public.pages.projects.edit', compact('project'));
    }

    // Atualiza projeto
    public function update(Request $request, Projeto $project)
    {
        $request->validate([
            'titulo' => ['required','string','max:255', Rule::unique('projetos')->ignore($project->id_projeto, 'id_projeto')],
            'descricao' => 'nullable|string',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => ['required', Rule::in(['rascunho', 'concluido'])],
            'link' => 'nullable|url',
        ]);

        $slug = Str::slug($request->titulo);
        if (Projeto::where('slug', $slug)->where('id_projeto', '!=', $project->id_projeto)->exists()) {
            $slug .= '-' . uniqid();
        }

        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('projects', 'public');
            $project->imagem = $imagemPath;
        }

        $project->update([
            'titulo' => $request->titulo,
            'slug' => $slug,
            'descricao' => $request->descricao,
            'imagem' => $imagemPath,
            'status' => $request->status,
            'link' => $request->link,
        ]);

        return redirect()->route('public.pages.projects.index')->with('success', 'Projeto atualizado com sucesso!');
    }

    // Deletar projeto
    public function destroy(Projeto $project)
    {
        $project->delete();
        return redirect()->route('public.pages.projects.index')->with('success', 'Projeto excluído com sucesso!');
    }

    // Exibe no site público
    public function show(Projeto $project)
    {
        abort_if($project->status !== 'concluido', 404);
        return view('public.pages.projects.show', compact('project'));
    }
}
