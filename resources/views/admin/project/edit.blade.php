@extends('layouts.admin')

@section('content')
    <h1>Modifica il progetto</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.project.update', ['newProject' => $newProject->slug]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $newProject->title) }}">
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', $newProject->content) }}</textarea>
        </div>
        <div class="form-group">
            <label for="type_id">Tipo</label>
            <select class="form-select" name="type_id" id="type_id">
                <option value="">Seleziona</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $type->id == old('type_id', $newProject->type_id) ? 'selected' : '' }}>{{ $type->project_type }}</option>
                @endforeach                
            </select>
        </div>        
        <div class="form-group">
            <label for="tech_ids">Tecnologia usata</label>
            @foreach ($technologies as $tech)
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="tech_ids[]" id="tech_{{ $tech->id }}" value="{{ $tech->id }}"
                        @if (is_array(old('tech_ids')) && in_array($tech->id, old('tech_ids')))
                            checked
                        @elseif ($newProject->technologies->contains($tech->id))
                            checked
                        @endif
                    >
                    <label class="form-check-label" for="tech_{{ $tech->id }}">{{ $tech->project_tech }}</label>
                </div>
            @endforeach
        </div>              
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
