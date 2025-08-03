@php 

$categories = [
    'first' => 'Design',
    'second' => 'Development',
    'third' => 'Marketing',

];

@endphp

<section class="projects py-5 wow fadeInUp" data-wow-delay="0.1s">

    <h2 class="title pb-3 mb-5">Projetos em Destaque</h2>

    <div class="row">
        <div class="col-12 text-center mb-2">
            <ul class="list-inline mb-4" id="portfolio-flters">
                <li class="btn btn-secondary active" data-filter="*"><i class="fa fa-star me-2"></i>All</li>
                @foreach($categories as $key => $category)
                <li class="btn btn-secondary" data-filter=".{{ $key }}"><i class="fa fa-{{ $key === 'first' ? 'paint-brush' : 'code' }} me-2"></i>{{ $category }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row g-2 mt-3 w-100 portfolio-container">
        @foreach($latestProjects as $project)
        <div class="col-12 col-md-6 col-lg-4 mb-2 d-flex aligm-items-center justify-content-center portfolio-item {{ $project->category }}">
            <!-- Projeto 1 -->
            <div class="card mb-3 bg-transparent shadow-sm mx-auto position-relative overflow-hidden mb-2" style="max-width: 540px;">
                @if($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top rounded-start" alt="{{ $project->title }}" style="object-fit: cover; height: 200px;">
                @else
                <img src="{{ asset('img/portfolio-1.jpg') }}" class="card-img-top rounded-start" alt="{{ $project->title }}" style="object-fit: cover; height: 200px;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ Str::limit($project->title, 30) }}</h5>
                    <p class="card-text">{{ Str::limit($project->description, 130) }}</p>

                    <div class="border-top-0 d-flex justify-content-end mt-3">
                        <a href="{{ $project->link }}" class="btn btn-sm btn-outline-primary mx-auto" target="_blank">GitHub</a>
                        <a href="{{ route('public.projects.show', $project->id) }}" class="btn btn-sm btn-outline-info mx-auto">Ver Mais</a>
                    </div>
                    <div class="portfolio-btn d-flex align-items-center justify-content-center">
                        <a href="{{ asset('storage/' . $project->image) }}" data-lightbox="portfolio">
                            <i class="bi bi-plus text-light"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ./card -->
        </div><!-- ./col-12 -->
        @endforeach
    </div>
    <!-- ./row -->
    <div class="text-center mt-8">
        <a href="{{ route('projects') }}" class="bg-blue-500 hover:bg-blue-600 text-gray px-6 py-2 rounded">
            Ver todos os projetos
        </a>
    </div>

</section>
