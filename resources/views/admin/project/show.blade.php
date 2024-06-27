@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $newProject->title }}</h1>
                <p>{{ $newProject->content }}</p>
                <p><strong>Slug:</strong> {{ $newProject->slug }}</p>
                <p><strong>Tipologia del progetto:</strong> {{ $newProject->type ? $newProject->type->project_type : 'Nessuna tipologia' }}</p>
                
                <div>
                    <strong>Tecnologie usate:</strong>
                    <div class="d-flex flex-wrap">
                        @foreach ($newProject->technologies as $technology)
                            <span class="badge rounded-pill me-2 mb-2" style="background:{{ $technology->description }}">{{ $technology->project_tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Immagine di copertina</h5>
                        {{-- condizionale per verificare l'esistenza dell'immagine --}}
                        @if ($newProject->cover_image)
                            <img src="{{ asset('storage/' . $newProject->cover_image) }}" class="img-fluid rounded" alt="Cover Image">
                        @else
                            <p class="text-muted">Immagine non disponibile</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
