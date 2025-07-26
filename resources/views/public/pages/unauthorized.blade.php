@extends('layouts.app')

@section('title', 'Acesso Negado - Portfolio Manex')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-5xl font-bold text-red-500">Acesso Negado</h1>
        <p class="mt-4 text-lg text-gray-600">Você não tem permissão para acessar esta página.</p>
        <a href="{{ route('home') }}" class="inline-block mt-6 px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            Voltar para a Home
        </a>
    </div>
</div>
@endsection