<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Project;

class ProjectsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $status = '';

    protected $paginationTheme = 'bootstrap';

    // Sempre que alterar busca ou status, volta para a página 1
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingStatus()
    {
        $this->resetPage();
    }

    public function render()
    {
        $projects = Project::where('title', 'like', "%{$this->search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.admin.projects-table', compact('projects'));
    }
}
