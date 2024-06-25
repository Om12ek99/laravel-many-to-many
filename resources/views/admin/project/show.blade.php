@extends('layouts.admin')

@section('content')
    <h1>{{$newProject->title}}</h1>
    <p> {{$newProject->content}} </p>
    <p>Slug: {{$newProject->slug}}</p>
    <p>Tecnologia del Progetto</p>
@endsection