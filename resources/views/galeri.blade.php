@extends('layout')

@section('title', 'Galeri')

@section('content')
<section class="galeri">
    <h1>Galeri Foto</h1>
    <div class="gallery-grid">
        @foreach ($images as $image)
        <div class="gallery-item">
            <img src="/images/{{ $image->getFilename() }}" alt="Gambar">
        </div>
        @endforeach
    </div>
</section>
@endsection
