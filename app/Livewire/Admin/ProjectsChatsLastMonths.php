<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Projeto as Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProjectsChatsLastMonths extends Component
{
    public function render()
    {
        $totalProjects = Project::count();
        $publishedProjects = Project::where('status', 'concluido')->count();
        $draftProjects = Project::where('status', 'em_andamento')->count();

        // Dados para grafico de barras: último 6 meses
        $projectByMonth = Project::selectRaw('COUNT(*) as total, MONTH(created_at) as month')
            ->where('created_at', '>=', Carbon::now()->subMonths(6))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();

        // Preenche meses faltando com 0.
        $months = [];
        $totals = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $monthNumber = $date->format('n'); // número do mês
            $months[] = ucfirst($date->locale('pt_BR')->translatedFormat('M')); // Adiciona ao array
            $totals[] = $projectByMonth[$monthNumber] ?? 0; // Adiciona ao array
        }

        return view('livewire.admin.projects-chats-last-months', compact(
            'totalProjects',
            'publishedProjects',
            'draftProjects',
            'months',
            'totals'
        ));
    }
}
