<section id="aptidoes">
  <div class="container mx-auto px-4 max-w-5xl">
    <h2 class="section-title text-center">Aptidões</h2>
    <div class="row g-2">
      @foreach([
      ['title' => 'Liderança em Produção Industrial', 'level' => 25 , 'icon' => 'people'],
      ['title' => 'Desenvolvimento com Java e Spring Boot', 'level' => 40, 'icon' => 'pc-display'],
      ['title' => 'Conhecimento em Bancos de Dados (SQL)', 'level' => 60, 'icon' => 'database'],
      ['title' => 'Análise de Requisitos e Modelagem UML', 'level' => 55, 'icon' => 'diagram-3'],
      ['title' => 'Comunicação e Trabalho em Equipe', 'level' => 90, 'icon' => 'people-fill'],
      ['title' => 'Gestão de Projetos e Metodologias Ágeis', 'level' => 70, 'icon' => 'clipboard-data'],
      ['title' => 'Desenvolvimento Web com Laravel', 'level' => 80, 'icon' => 'globe'],
      ['title' => 'Conhecimento em Docker e Kubernetes', 'level' => 90, 'icon' => 'fan'],
      ['title' => 'Inglês Técnico Avançado', 'level' => 75, 'icon' => 'translate']
      ] as $aptitude)

      @php
        $colors = ['primary', 'secondary', 'teal', 'danger', 'warning', 'info', 'dark', 'navy', 'purple'];
        $color = $colors[$loop->index % count($colors)];
      @endphp

      <div class="col-md-4 col-sm-6 col-12">
        <div class="info-box bg-{{ $color }}">
          <span class="info-box-icon"><i class="bi bi-{{ $aptitude['icon'] }}"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">{{ $aptitude['title'] }}</span>

            <div class="progress">
              <div class="progress-bar" style="width: {{ $aptitude['level'] }}%"></div>
            </div>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      @endforeach
    </div>
  </div>
</section>