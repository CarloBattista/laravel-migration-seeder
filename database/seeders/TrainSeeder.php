<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 15; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->time('H:i:s'),
                'orario_arrivo' => $faker->time('H:i:s'),
                'codice_treno' => $faker->unique()->randomNumber(4),
                'numero_carrozze' => $faker->numberBetween(1, 10),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}
