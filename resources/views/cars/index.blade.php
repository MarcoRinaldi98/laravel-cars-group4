@extends('layouts.app')


@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Brand</th>
      <th scope="col">Model</th>
      <th scope="col">Price</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cars as $car)
    <tr>


      <th scope="row">{{$car->id}}</th>
      <td>{{$car->brand}}</td>
      <td>{{$car->model}}</td>
      <td>{{$car->price}}</td>
      <td><a class="btn btn-primary" href="{{route('cars.show' , ['car'=> $car->id])}}">vedi</a></td>
    </tr>
    @endforeach
   
  </tbody>
</table>




@endsection