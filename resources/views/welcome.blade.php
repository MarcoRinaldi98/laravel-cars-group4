@extends('layouts.app')

@section('page-title', 'Home')

@section('content')

    <h1 class="py-5 mt-5 text-center"> Benvenuto in Cars </h1>
    <div class="w-100 text-center">
        <a href="{{ route('cars.index') }}" class="btn btn-secondary mt-5">
            Vai alla lista delle auto
        </a>
    </div>

@endsection
