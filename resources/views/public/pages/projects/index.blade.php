@extends('public.layouts.app')

@section('content')
<section class="py-12">
    <div class="container mx-auto px-4">

        <!-- Content Header (Page header) -->
        <section class="content-header my-3">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Todos meus Projetos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Projetos</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- ./Content Header (Page header) -->


        <div class="grid md:grid-cols-3 gap-6">
            @foreach($projects as $project)
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition mb-3">
                @if($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" class="img-thumbnail object-cover rounded">
                @endif
                <div class="p-4">
                    <h3 class="text-xl font-semibold">{{ $project->title }}</h3>
                    <p class="fs-5 mb-4">{{ Str::limit($project->description, 300) }}</p>
                    <a href="{{ route('public.projects.show', $project->id) }}"
                        class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                        Ver mais
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-6">
            {{ $projects->links() }}
        </div>
    </div>
</section>


@endsection