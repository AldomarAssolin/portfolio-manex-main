<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Projeto as Project;
use App\Models\Post;
use App\Models\User;

class DashboardStats extends Component
{
    public $totalProjects;
    public $totalPosts;
    public $totalUsers;

    public function mount()
    {
        $this->loadStats();
    }

    public function loadStats()
    {
        $this->totalProjects = Project::count();
        $this->totalPosts = Post::count();
        $this->totalUsers = User::count();
    }

    public function render()
    {
        return view('livewire.admin.dashboard-stats');
    }
}

