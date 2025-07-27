<section class="projects container py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Projetos em Destaque</h2>



        <div class="row mt-3">
            @foreach ([
            ['title' => 'Sistema de Blog','description' => 'Plataforma completa com autenticação, cadastro de artigos e comentários. Desenvolvido em PHP e MySQL.', 'github-link' => 'https://github.com/AldomarAssolin/blog.git', 'bg' => 'bg-green', 'tag' => ['PHP', 'MySQL', 'Bootstrap']],
            ['title' => 'Portfólio com API', 'description' => 'Sistema em Java Spring Boot com React, organizado por APIs: projetos, blog, dados pessoais.', 'github-link' => 'https://github.com/AldomarAssolin/portfolio-manex.git', 'bg' => 'bg-indigo', 'tag' => ['JAVA', 'Spring Boot', 'React']],
            ['title' => 'Controle de Produção', 'description' => 'Projeto de gerenciamento de produção com Flask e SQLAlchemy, criado para ambiente fabril.', 'github-link' => 'https://github.com/AldomarAssolin/controle-producao-api.git', 'bg' => 'bg-cyan', 'tag' => ['Python', 'Flask', 'SQLAlchemy']],
            ] as $exp)

            <!-- Projeto 1 -->
            <div class="col-md-4 mb-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/PlanetArcadia.png') }}" class="img-fluid rounded-start w-100 h-100" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $exp['title'] }}</h5>
                                <p class="card-text">{{ $exp['description'] }}</p>
                                @foreach ($exp['tag'] as $tag)
                                <span class="badge bg-{{ $loop->index % 2 == 0 ? 'success' : 'primary' }}">{{ $tag }}</span>
                                @endforeach
                                <div class="border-top-0 d-flex justify-content-end mt-3">
                                    <a href="{{ $exp['github-link'] }}" class="btn btn-sm btn-outline-primary mx-auto" target="_blank">GitHub</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary disabled mx-auto">Ver Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>