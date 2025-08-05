<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Projeto as Project;
use Illuminate\Support\Facades\DB;

class ProjectsChart extends Component
{
    public $projectsLabels = [];
    public $projectsdata = [];
    public $totalProjects;

    public function mount()
    {
        $stats = Project::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->pluck('total', 'status')
            ->toArray();

        $totalProjects = Project::count();

        $this->projectsLabels = array_keys($stats);
        $this->projectsdata = array_values($stats);
        $this->totalProjects = $totalProjects;
    }

    public function totalProjects()
    {
        return Project::count();
    }

    public function render()
    {
        return view('livewire.admin.projects-chart');
    }
}
