    <!-- Gráficos -->

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Projetos Criados (Últimos 6 meses)</h3>
        </div>
        <div class="card-body text-secondary">
            <canvas id="projectsByMonthChart" class="m-auto"></canvas>
        </div>
    </div>

    <!-- ./ Graficos -->

    @push('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const months = @json($months);
            const totals = @json($totals);
            const data = {
                labels: months,
                datasets: [{
                    label: 'Projetos Criados',
                    data: totals,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    pointStyle: 'circle',
                    pointRadius: 5,
                    pointHoverRadius: 7,
                }]
            };
            // Configuração do gráfico
            const config = {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                color: 'rgb(255, 99, 132)'
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                                    }
                                }
                            }
                        },
                        title: {
                            display: true,
                            text: 'Projetos Criados nos Últimos 6 Meses',
                            color: '#333',
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            const ctx = document.getElementById('projectsByMonthChart').getContext('2d');
            new Chart(ctx, config);

        });
    </script>

    @endpush