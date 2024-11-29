@extends('layout')

@section('title', 'Portofolio')

@section('content')
<section class="portofolio">
    <h1>Portofolio Saya</h1>
    <div class="projects-grid">
        @foreach ($projects as $project)
        <div class="project-card">
            @if ($project->gambar)
            <img src="/images/{{ $project->gambar }}" alt="{{ $project->judul }}">
            @endif
            <h2>{{ $project->judul}}</h2>
            <p>{{ $project->deskripsi}}</p>
            @if ($project->link)
            <a href="{{ $project->link}}" target="_blank" class="btn">Lihat Proyek</a>
            @endif
        </div>
        @endforeach
    </div>
</section>
@endsection
