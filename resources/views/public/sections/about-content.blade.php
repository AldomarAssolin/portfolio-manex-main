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
<!-- /.About Description -->

<!-- Skills Section -->
<section class="py-5 bg-light">
    <div class="container">
        @include('public.sections.skills')
    </div>
</section>
<!-- /.Skills Section -->

<!-- Experience Section -->
<section class="py-5">
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
                <div class="education-card timeline-item {{ $exp['bg'] }}">
                    <div class="timeline-body">
                        <h5 class="fw-bold text-white">{{ $exp['title'] }}</h5>
                        <p class="text-muted text-white">{{ $exp['company'] }} | {{ $exp['period'] }}</p>
                        <p class="text-white">{{ $exp['description'] }}</p>

                    </div>
                    <div class="timeline-footer">
                        <a class="btn btn-primary btn-sm">Read more</a>
                        @auth
                        <a class="btn btn-danger btn-sm">Delete</a>
                        @endauth

                    </div>
                </div>
            </div>
            <!-- END timeline item -->
            @endforeach
        </div>
    </div>
</section>
<!-- /.Experience Section -->

<!-- Education Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Formação Acadêmica</h2>
        <div class="row g-4">
            @foreach ([
            ['degree' => 'Técnico em Soldagem', 'institution' => 'Colégio Técnico Industrial de Santa Maria, RS - CTISM', 'period' => '2018 - 2019'],
            ['degree' => 'Análise e Desenvolvimento de Sistemas', 'institution' => 'Uniasselvi', 'period' => '2022 - 2026']
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
<!-- /.Education Section -->

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
<!-- /.Certificates Section -->