@php
    // Define locale and timezone for greeting
    setlocale(LC_TIME, 'pt_BR.UTF-8');
    date_default_timezone_set('America/Sao_Paulo');

    $hora = now()->format('H');
    if ($hora >= 5 && $hora < 12) {
        $saudacao='Bom dia' ;
    } elseif ($hora>= 12 && $hora < 18) {
        $saudacao='Boa tarde' ;
    } else {
        $saudacao='Boa noite' ;
    }
@endphp

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <img src="{{ asset('images/logo192.png') }}" alt="Foto de Perfil" class="profile-img mb-4">
        <h1 class="display-4 fw-bold">{{ $saudacao }}! Seja bem vindo.</h1>
        <p class="lead">Este é meu portfólio, sou desenvolvedor apaixonado por tecnologia, inovação e soluções criativas.</p>
        <a href="{{ route('about') }}" class="btn text-light bg-navy {{ request()->is('about') ? 'd-none' : '' }}">Saiba Mais</a>
    </div>
</section>