<div class="card card-outline card-success">
    <div class="card-header">
        <div class="w-100 card-title align-items-center d-flex justify-content-between">
            <h5>Projetos</h5>
            <span class="badge badge-info">{{ $totalProjects }}</span>
        </div>
    </div>
    <div class="card-body">
        <canvas id="projectsChart"></canvas>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('projectsChart').getContext('2d');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Publicados', 'Rascunhos'],
            datasets: [{
                data: @json($projectsdata),
                backgroundColor: ['#1d1d1d', '#808008', '#fcfcfc'],
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
    
});

</script>
@endpush

