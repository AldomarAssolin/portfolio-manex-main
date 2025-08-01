<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    // Exibe os 3 projetos mais recentes
    public function latest(){
        return Project::where('status','published')
            ->latest()
            ->take(3)
            ->get();
    }

    // Exibe todos os projetos (pagina completa)
    public function index(){
        $projects = Project::where('status', 'published')
            ->latest()
            ->paginate(9);

        return view('public.pages.projects.index', compact('projects'));
    }

    // Exibe projeto individual
    public function show($id){
        $project = Project::where('status', 'published')->findOrFail($id);
        return view('public.pages.projects.show', compact('project'));
    }
}
