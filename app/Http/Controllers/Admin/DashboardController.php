<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projeto;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $totalProjects = Projeto::count();
        $publishedProjects = Projeto::where('status', 'concluido')->count();
        $draftProjects = Projeto::where('status', 'em_andamento')->count();

        // Dados para grafico de barras: último 6 meses
        $projectByMonth = Projeto::selectRaw('COUNT(*) as total, MONTH(created_at) as month')
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

        return view('admin.pages.dashboard.index', compact(
            'totalProjects',
            'publishedProjects',
            'draftProjects',
           
        ));
    }
}
