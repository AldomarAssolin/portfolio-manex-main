<section class="sobre-mim bg-light shadow-sm rounded p-5 my-5">



    <div class="container mb-3 border-0 py-5 mb-5">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body d-flex flex-column justify-content-center h-100 text-navy px-5">
                    <h2 class="card-title">Olá!</h5>
                        <p class="card-text">
                            Me chamo Aldomar Assolin (Manex), sou apaixonado por tecnologia, soldagem e desenvolvimento de sistemas.
                            Este é meu espaço para compartilhar minhas ideias, projetos e jornada profissional
                        </p>

                        {{-- Texto e Aptidões --}}
                        
                        <div class="card-text">
                            <span class="badge bg-success px-3 py-2">Curioso</span>
                            <span class="badge bg-primary px-3 py-2">Engenhoso</span>
                            <span class="badge bg-danger px-3 py-2">Sonhador</span>
                            <a href="{{ route('about') }}" class="btn btn-outline-info w-25 btn-sm mx-5">
                                Saiba mais...
                            </a>
                        </div>
                </div>
            </div>

            {{-- Foto de Perfil --}}
            <div class="col-md-4 text-end px-5">
                <img src="{{ asset('images/imagem-perfil.png') }}" alt="Foto de Manex" class="img-fluid rounded-end shadow-lg">
            </div>
        </div>
    </div>
</section>