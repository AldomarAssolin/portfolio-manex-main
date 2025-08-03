<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ProjectsStats extends Component
{
    public function render()
    {
        $totalProjects = Project::count();
        $publishedProjects = Project::where('status', 'published')->count();
        $draftProjects = Project::where('status', 'draft')->count();
        $projectByMonth = Project::selectRaw('COUNT(*) as total, MONTH(created_at) as month')
            ->where('created_at', '>=', now()->subMonths(6))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $months = [];
        $totals = [];
        for ($i = 5; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $monthNumber = $date->format('n');
            $months[] = ucfirst($date->locale('pt_BR')->translatedFormat('M'));
            $totals[] = $projectByMonth[$monthNumber] ?? 0;
        }

        return view('livewire.admin.projects-stats', [
            'totalProjects' => $totalProjects,
            'publishedProjects' => $publishedProjects,
            'draftProjects' => $draftProjects,
            'months' => $months,
            'totals' => $totals,
        ]);
    }
}
