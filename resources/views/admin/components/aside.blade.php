<aside class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px; height: 90vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">Portfolio</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active link-light' : 'link-dark' }}" aria-current="page">
                <i class="bi bi-house-door"></i>
                Início
            </a>
        </li>
        <li>
            <a href="{{ route('admin.projects') }}" class="nav-link {{ request()->is('admin/projects') ? 'active link-light' : 'link-dark' }}">
                <i class="bi bi-folder"></i>
                Projetos
            </a>
        </li>
        <li>
            <a href="{{ route('admin.skills') }}" class="nav-link {{ request()->is('admin/skills') ? 'active link-light' : 'link-dark' }}">
                <i class="bi bi-lightbulb"></i>
                Skills
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">
                <i class="bi bi-envelope"></i>
                Contatos
            </a>
        </li>
    </ul>
    <hr>
    <ul class="nav flex-column mt-3">
        <li>
            <a class="nav-link link-dark" href="#">
                <i class="bi bi-person-circle"></i>
                Perfil
            </a>
        </li>
        <li>
        <a href="#" class="nav-link link-dark">
            <i class="bi bi-gear"></i>
            Configurações
        </a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="nav-link link-dark" type="submit">
                    <i class="bi bi-box-arrow-right"></i>
                    Sair
                </button>
            </form>
        </li>
    </ul>
</aside>