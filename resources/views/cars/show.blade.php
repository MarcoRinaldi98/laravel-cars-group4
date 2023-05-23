@extends('layouts.app')

@section('page-title', 'Show')

@section('content')
    <div class="text-center pt-5">
        <h2>{{ $car->brand }}</h2>
        <div>
            <span class="pe-5">{{ $car->model }}</span>
            <span class="ps-5">{{ $car->year_release }}</span>
        </div>
        <h3>Prezzo: {{ $car->price }} €</h3>
        <small>Cilindrata: {{ $car->cc }}</small>

        <div class="d-flex justify-content-center py-5">
            <a href="{{ route('cars.index') }}" class="btn btn-secondary me-2">Torna alla lista</a>
            <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" method="POST">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger delete-btn">
                    Elimina
                </button>
            </form>
        </div>
    </div>
@endsection
