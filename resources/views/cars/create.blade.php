@extends('layouts.app')

@section('page-title', 'Create')

@section('content')
    <h3 class="text-primary py-3">Modulo per l'inserimento di una nuova macchina:</h3>
    <form class="pb-3" action="{{ route('cars.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="brand" class="form-label">Marca: </label>
            <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand"
                value="{{ old('brand') }}">
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Modello: </label>
            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model"
                value="{{ old('model') }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo: </label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label for="cc" class="form-label">Cilindrata: </label>
            <input type="text" class="form-control @error('cc') is-invalid @enderror" id="cc" name="cc"
                value="{{ old('cc') }}">
        </div>

        <div class="mb-3">
            <label for="year_release" class="form-label">Data di uscita: </label>
            <input type="text" class="form-control @error('year_release') is-invalid @enderror" id="year_release"
                name="year_release" value="{{ old('year_release') }}">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary me-2">
            Torna alla lista
        </a>

    </form>
@endsection
