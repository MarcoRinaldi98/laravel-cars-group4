<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $car = new Car();

            $car->brand = $faker->company();
            $car->model = $faker->randomElement(['clio', 'punto', 'smart', 'r8']);
            $car->price = $faker->randomFloat(2, 1, 999999);
            $car->cc = $faker->randomNumber(4);
            $car->year_release = $faker->date('Y-m-d');

            $car->save();
        }
    }
}
