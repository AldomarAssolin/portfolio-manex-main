<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('home') }}" class="brand-link">
    <img src="{{ asset('images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('images/imagem-perfil.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ route('admin.profile') }}" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <i class="nav-icon bi bi-speedometer2"></i>
            <p>Visão Geral</p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link {{ request()->is('admin/projects*') || request()->is('admin/posts*') ? 'active' : '' }}">
            <i class="nav-icon bi bi-folder"></i>
            <p>
              Conteúdo
              <i class="right bi bi-arrow-90deg-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.projects.index') }}" class="nav-link {{ request()->is('admin/projects*') ? 'active' : '' }}">
                <i class="bi bi-kanban nav-icon"></i>
                <p>Projetos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.posts.index') }}" class="nav-link {{ request()->is('admin/posts*') ? 'active' : '' }}">
                <i class="bi bi-postcard nav-icon"></i>
                <p>Posts</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link   {{ request()->is('admin/settings*') || request()->is('admin/users*') ? 'active' : '' }}">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Administração
              <i class="right bi bi-arrow-90deg-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link {{ request()->is('admin/settings*') ? 'active' : '' }}">
                <i class="bi bi-gear nav-icon"></i>
                <p>Configurações</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                <i class="bi bi-people nav-icon"></i>
                <p>Usuários</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{ request()->is('admin/profile*') ? 'active' : '' }}">
                <i class="bi bi-person-fill-gear nav-icon"></i>
                <p>Meu Perfil</p>
              </a>
            </li>
          </ul>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>