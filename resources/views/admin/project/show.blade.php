@extends('layouts.admin')

@section('content')
    <h1>{{$newProject->title}}</h1>
    <p> {{$newProject->content}} </p>
    <p>Slug: {{$newProject->slug}}</p>
    <p>Tipologia del progetto : {{ $newProject->type?->project_type }}</p>
    <p> @foreach ($newProject->technologies as $technology)
        <p class="badge" style="background:{{$technology->description}}">{{ $technology->project_tech }}</p>
        @endforeach</p>
@endsection