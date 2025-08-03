    <!-- ./Cards Projetos -->
    <div class="row">
        <h3>Projetos</h3>
        <!-- Card: Total de Projetos -->
        <div class="col-lg-4 col-6">
            <div class="small-box bg-info pb-3">
                <div class="inner">
                    <h3>{{ $totalProjects }}</h3>
                    <p>Total de Projetos</p>
                </div>
                <div class="icon">
                    <i class="bi bi-folder"></i>
                </div>
            </div>
        </div>

        <!-- Card: Projetos Publicados -->
        <div class="col-lg-4 col-6">
            <div class="small-box bg-success pb-3">
                <div class="inner">
                    <h3>{{ $publishedProjects }}</h3>
                    <p>Projetos Publicados</p>
                </div>
                <div class="icon">
                    <i class="bi bi-check-circle"></i>
                </div>
            </div>
        </div>
        <!-- ./Card: Projetos Publicados -->

        <!-- Card: Rascunhos -->
        <div class="col-lg-4 col-6">
            <div class="small-box bg-warning pb-3">
                <div class="inner">
                    <h3>{{ $draftProjects }}</h3>
                    <p>Projetos em Rascunho</p>
                </div>
                <div class="icon">
                    <i class="bi bi-pencil-square"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Cards Projetos -->
