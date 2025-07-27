<section class="skills py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Minhas Skills</h2>

        <div class="row mt-3">
            @foreach([
            'Frontend' => [
            ['skill' => 'HTML', 'level' => 90],
            ['skill' => 'CSS', 'level' => 85],
            ['skill' => 'JavaScript', 'level' => 80],
            ['skill' => 'React', 'level' => 75],
            ],
            'Backend' => [
            ['skill' => 'PHP', 'level' => 90],
            ['skill' => 'Laravel', 'level' => 85],
            ['skill' => 'Node.js', 'level' => 80],
            ['skill' => 'Python', 'level' => 70],
            ],
            'DevOps' => [
            ['skill' => 'Docker', 'level' => 80],
            ['skill' => 'Kubernetes', 'level' => 75],
            ['skill' => 'AWS', 'level' => 70],
            ['skill' => 'CI/CD', 'level' => 65],
            ],
            'Database' => [
            ['skill' => 'MySQL', 'level' => 85],
            ['skill' => 'PostgreSQL', 'level' => 80],
            ['skill' => 'MongoDB', 'level' => 75],
            ['skill' => 'Redis', 'level' => 70],
            ],
            'Soft Skills' => [
            ['skill' => 'Comunicação', 'level' => 90],
            ['skill' => 'Trabalho em Equipe', 'level' => 95],
            ['skill' => 'Resolução de Problemas', 'level' => 85],
            ['skill' => 'Gestão de Tempo', 'level' => 80],
            ],
            ] as $category => $skillsList)

            @php
            $colors = ['primary', 'secondary', 'teal', 'danger', 'warning', 'info', 'dark', 'navy', 'purple'];
            $color = $colors[$loop->index % count($colors)];
            @endphp

            <div class="col-md-4">
                <div class="card card-skills card-{{ $color }} shadow-lg">
                    <div class="card-header">
                        <h3 class="card-title">{{ $category }}</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    @foreach($skillsList as $skill)
                    <div class="card-body">
                        {{ $skill['skill'] }}
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{ $skill['level'] }}%;" aria-valuenow="{{ $skill['level'] }}" aria-valuemin="0" aria-valuemax="100">{{ $skill['level'] }}%</div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    @endforeach
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>