@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')



<!-- Projects info -->
<section class="projects container-fluid">
    <!-- Stats Cards -->
    <livewire:admin.dashboard-stats />
    <!-- ./Stats Cards -->

    <div class="row">
        <div class="col-md-3">
            <!-- Stats Projetos -->
            <livewire:admin.projects-chart />
            <!-- ./Stats Projetos -->
        </div>
        <div class="col-md-3">
            <!-- Stats Posts -->
            <livewire:admin.posts-chart />
            <!-- ./Stats Posts -->
        </div>
        <div class="col-md-5">
            <!-- Projects Chart -->
            <livewire:admin.projects-chats-last-months />
            <!-- ./Projects Chart -->
        </div>
    </div>

    <!-- Cards Projetos -->
    <livewire:admin.projects-stats />
    <!-- ./Cards Projetos -->






</section>
<!-- ./Projects info -->
@endsection

@push('scripts')

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
</script>
@endpush