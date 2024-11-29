@extends('layout')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="hero-content">
        <img src="/images/{{ $profile->foto }}" alt="Foto Profil" class="profile-photo">
        <h1>{{ $profile->nama}}</h1>
        <p class="deskripsi">{{ $profile->deskripsi}}</p>
        <div class="social-icons">
            <a href="{{ $profile->facebook }}" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="mailto:{{ $profile->contact_email }}" target="_blank"><i class="fas fa-envelope fa-2x"></i></a>
            <a href="{{ $profile->instagram }}" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="{{ $profile->github }}" target="_blank"><i class="fab fa-github-square fa-2x"></i></a>
        </div>
    </div>
</section>
@endsection
