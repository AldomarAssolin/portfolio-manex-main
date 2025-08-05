<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('admin.pages.projects.create');
    }

    /**
     * Salva novo projeto.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'status' => 'required|in:draft,published',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        Projeto::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Projeto criado com sucesso!');
    }

    /**
     * Mostra um projeto.
     */
    public function show(string $id)
    {
        $project = Projeto::findOrFail($id);
        return view('admin.pages.projects.show', compact('project'));
    }

    /**
     * Formulário de edição.
     */
    public function edit(string $id)
    {
        $project = Projeto::findOrFail($id);
        return view('admin.pages.projects.edit', compact('project'));
    }

    /**
     * Atualiza um projeto.
     */
    public function update(Request $request, string $id)
    {
        $project = Projeto::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'status' => 'required|in:draft,published',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove um projeto.
     */
    public function destroy(string $id)
    {
        $project = Projeto::findOrFail($id);

        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Projeto deletado com sucesso!');
    }
}
