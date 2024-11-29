@extends('layout')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="hero-content">
        <img src="/images/{{ $profile->foto }}" alt="Foto Profil" class="profile-photo">
        <h1>{{ $profile->nama}}</h1>
        <p class="deskripsi">{{ $profile->deskripsi}}</p>
        <a href="mailto:{{ $profile->contact_email }}" class="btn">Hubungi Saya</a>
    </div>
</section>
@endsection
