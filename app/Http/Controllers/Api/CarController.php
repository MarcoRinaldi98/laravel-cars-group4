<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::with('optionals')->get();
        return response()->json([
            'success' => true,
            'results' => $cars
        ]);

    }

    public function show($id)
    {
        $car = Car::where('id', $id)->with(['optionals',])->first();
        if ($car) {
            return response()->json([
                'success' => true,
                'car' => $car
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Auto non trovata!'
            ]);
        }

    }
}