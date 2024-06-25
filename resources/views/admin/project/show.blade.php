@extends('layouts.admin')

@section('content')
    <h1>{{$newProject->title}}</h1>
    <p> {{$newProject->content}} </p>
    <p>Slug: {{$newProject->slug}}</p>
@endsection