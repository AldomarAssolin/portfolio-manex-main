<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Project;

class ProjectsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $status = 'all';

    protected $paginationTheme = 'bootstrap';
    protected $updatesQueryString = ['search', 'status', 'page'];

    // Sempre que alterar busca/status, reseta para página 1
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedStatus()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Project::query()
            ->when($this->status !== 'all', fn($q) => $q->where('status', $this->status))
            ->when($this->search, fn($q) => $q->where('title', 'like', '%' . $this->search . '%'));

        $projects = $query->orderByDesc('created_at')->paginate(10);

        return view('livewire.admin.projects-table', [
            'projects' => $projects,
            'total' => Project::count(),
        ]);
    }
}
