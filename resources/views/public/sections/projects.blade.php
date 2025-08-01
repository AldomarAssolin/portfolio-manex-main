<section class="projects container py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Projetos em Destaque</h2>

        <div class="row mt-3">
            @foreach($latestProjects as $project)

            <!-- Projeto 1 -->
            <div class="col-md-4 mb-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid rounded-start" alt="{{ $project->title }}">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">{{ Str::limit($project->description, 100) }}</p>

                                <div class="border-top-0 d-flex justify-content-end mt-3">
                                    <a href="{{ $project->link }}" class="btn btn-sm btn-outline-primary mx-auto" target="_blank">GitHub</a>
                                    <a href="{{ route('public.projects.show', $project->id) }}" class="btn btn-sm btn-outline-secondary mx-auto">Ver Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- ./row -->
        <div class="text-center mt-8">
            <a href="{{ route('projects') }}" class="bg-blue-500 hover:bg-blue-600 text-gray px-6 py-2 rounded">
                Ver todos os projetos
            </a>
        </div>
    </div>
    <!-- ./container -->
</section>