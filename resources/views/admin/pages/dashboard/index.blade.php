@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')



<!-- Projects info -->
<section class="projects container-fluid">
     <!-- ./Cards -->
    <div class="row">
        <!-- Card: Total de Projetos -->
        <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalProjects }}</h3>
                    <p>Total de Projetos</p>
                </div>
                <div class="icon">
                    <i class="fas fa-folder-open"></i>
                </div>
            </div>
        </div>

        <!-- Card: Publicados -->
        <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $publishedProjects }}</h3>
                    <p>Projetos Publicados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check-circle"></i>
                </div>
            </div>
        </div>

        <!-- Card: Rascunhos -->
        <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $draftProjects }}</h3>
                    <p>Projetos em Rascunho</p>
                </div>
                <div class="icon">
                    <i class="fas fa-pencil-alt"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Cards -->

    <!-- Gráficos -->
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Projetos por Status</h3>
                </div>
                <div class="card-body">
                    <canvas id="projectsChart" class="m-auto"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Projetos Criados (Últimos 6 meses)</h3>
                </div>
                <div class="card-body">
                    <canvas id="projectsByMonthChart" class="m-auto"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Graficos -->

</section>
<!-- ./Projects info -->
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('projectsChart').getContext('2d');
    const published = @json($publishedProjects);
    const draft = @json($draftProjects);
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Publicados', 'Rascunhos'],
            datasets: [{
                data: [published, draft],
                backgroundColor: ['#28a745', '#ffc107'],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                },
            }
        }
    });

    const months = @json($months);
    const totals = @json($totals);

    const ctxBar = document.getElementById('projectsByMonthChart').getContext('2d');
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: months,
            datasets: [{
                label: 'Projetos Criados',
                data: totals,
                backgroundColor: '#17a2b8'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush