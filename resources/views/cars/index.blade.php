@extends('layouts.app')

@section('page-title', 'List')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modello</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Cilindrata</th>
                <th scope="col">Data di uscita</th>
                <th scope="col" class="text-end">
                    <a href="{{ route('cars.create') }}" class="btn btn-success mt-4">
                        <i class="fa-solid fa-plus pe-2"></i>
                        Crea un nuovo progetto
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <th scope="row">{{ $car->id }}</th>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->price }}</td>
                    <td>{{ $car->cc }}</td>
                    <td>{{ $car->year_release }}</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-primary" href="{{ route('cars.show', ['car' => $car->id]) }}">
                            <i class="fa-solid fa-circle-info"></i>
                        </a>

                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning mx-2">
                            <i class="fa-solid fa-pen"></i>
                        </a>

                        <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" class="form_delete_cars" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger delete-btn ms_btn">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma eliminazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Confermi di voler eliminare l'elemento selezionato?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Conferma eliminazione</button>
            </div>
            </div>
        </div>
    </div>
@endsection
