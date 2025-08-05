<div class="card card-outline card-dark">
    <div class="card-header">
        <div class="w-100 card-title align-items-center d-flex justify-content-between">
            <h5>Posts</h5>
            <span class="badge badge-info">{{ $totalPosts }}</span>
        </div>
    </div>
    <div class="card-body">
        <canvas id="postsChart"></canvas>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('postsChart').getContext('2d');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Publicados', 'Rascunhos'],
            datasets: [{
                data: @json($data),
                backgroundColor: ['#6610f2', '#280b4e', '#6610f2'],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                                color: '#1d1d1d',
                            },
                },
            }
        }
    });
});


</script>
@endpush

