<!-- About Description -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Quem Sou Eu</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p class="text-muted text-center">
                    Sou um profissional dedicado com mais de 5 anos de experiência em desenvolvimento web,
                    especializado em criar soluções escaláveis e modernas. Minha paixão é transformar ideias
                    em realidade através de código limpo e design intuitivo. Adoro aprender novas tecnologias
                    e enfrentar desafios complexos.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Habilidades</h2>
        <div class="row g-4">
            @foreach (['PHP' => 90, 'Laravel' => 85, 'JavaScript' => 80, 'Bootstrap' => 95] as $skill => $progress)
            <div class="col-md-6 col-lg-3">
                <div class="skill-card">
                    <h5 class="fw-bold">{{ $skill }}</h5>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $progress }}%;"
                            aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Experience Section -->
<section class="py-5 bg-sky-950">
    <div class="container">
        <h2 class="section-title text-center">Experiências</h2>
        <div class="timeline">
            @foreach ([
            ['title' => 'Desenvolvedor Full Stack', 'company' => 'Tech Solutions', 'period' => 'Jan 2022 - Presente', 'description' => 'Desenvolvimento de aplicações web escaláveis usando Laravel e Vue.js.', 'bg' => 'bg-green'],
            ['title' => 'Engenheiro de Software', 'company' => 'Web Innovators', 'period' => 'Jan 2020 - Dez 2021', 'description' => 'Criação de APIs RESTful e integração com serviços de terceiros.', 'bg' => 'bg-indigo'],
            ['title' => 'Desenvolvedor Backend', 'company' => 'Innovate Tech', 'period' => 'Mar 2019 - Dez 2021', 'description' => 'Manutenção e otimização de APIs RESTful com PHP e MySQL.', 'bg' => 'bg-cyan'],
            ['title' => 'Estagiário em Desenvolvimento Web', 'company' => 'StartUp Hub', 'period' => 'Jan 2018 - Fev 2019', 'description' => 'Auxílio no desenvolvimento de sites e aplicações web.', 'bg' => 'bg-teal']
            ] as $exp)
            <!-- timeline time label -->
            <div class="time-label">
                <span class="bg-red">{{ $exp['period'] }}</span>
            </div>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <div>
                <i class="fas fa-envelope bg-blue"></i>
                <div class="education-card timeline-item {{ $exp['bg'] }}">
                    <div class="timeline-body">
                        <h5 class="fw-bold text-white">{{ $exp['title'] }}</h5>
                        <p class="text-muted text-white">{{ $exp['company'] }} | {{ $exp['period'] }}</p>
                        <p class="text-white">{{ $exp['description'] }}</p>

                    </div>
                    <div class="timeline-footer">
                        <a class="btn btn-primary btn-sm">Read more</a>
                        <a class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>
            <!-- END timeline item -->
            @endforeach
        </div>
    </div>
</section>

<!-- Education Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Formação Acadêmica</h2>
        <div class="row g-4">
            @foreach ([
            ['degree' => 'Bacharel em Ciência da Computação', 'institution' => 'Universidade Federal', 'period' => '2015 - 2019'],
            ['degree' => 'Curso Técnico em Informática', 'institution' => 'ETEC', 'period' => '2012 - 2014']
            ] as $edu)
            <div class="col-md-6">
                <div class="education-card">
                    <h5 class="fw-bold">{{ $edu['degree'] }}</h5>
                    <p class="text-muted">{{ $edu['institution'] }} | {{ $edu['period'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Certificates Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Certificados</h2>
        <div class="row g-4">
            @foreach ([
            ['title' => 'Certificado Laravel Avançado', 'issuer' => 'Udemy', 'year' => '2023'],
            ['title' => 'Desenvolvimento Web com Bootstrap', 'issuer' => 'Coursera', 'year' => '2022']
            ] as $cert)
            <div class="col-md-6">
                <div class="certificate-card">
                    <h5 class="fw-bold">{{ $cert['title'] }}</h5>
                    <p class="text-muted">{{ $cert['issuer'] }} | {{ $cert['year'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>