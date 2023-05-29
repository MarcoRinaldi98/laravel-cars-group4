<?php

namespace Database\Seeders;

use App\Models\Optional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionalSeeder extends Seeder
{
    public function run()
    {
        $optionals = ["aria-condizionata", "sedili-in-pelle", "telecamera-posteriore","cerchi-in-lega"];

        foreach ($optionals as $optional) {
            $newOptional = new Optional();
            $newOptional->name= $optional;
            $newOptional->save();
        }
    }
}
