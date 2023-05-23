@extends('layouts.app')

@section('page-title', 'Edit')

@section('content')
    <h3 class="text-primary py-3">Modifica i dati della macchina:</h3>
    <form class="pb-3" action="{{ route('cars.update', ['car' => $car->id]) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="brand" class="form-label">Marca: </label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $car->brand) }}">
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Modello: </label>
            <input type="text" class="form-control" id="model" name="model"
                value="{{ old('model', $car->model) }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo: </label>
            <input type="text" class="form-control" id="price" name="price"
                value="{{ old('price', $car->price) }}">
        </div>

        <div class="mb-3">
            <label for="cc" class="form-label">Cilindrata: </label>
            <input type="text" class="form-control" id="cc" name="cc" value="{{ old('cc', $car->cc) }}">
        </div>

        <div class="mb-3">
            <label for="year_release" class="form-label">Data di uscita: </label>
            <input type="text" class="form-control" id="year_release" name="year_release"
                value="{{ old('year_release', $car->year_release) }}">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary me-2">
            Torna alla lista
        </a>
    </form>
@endsection
