<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class GedungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i < 10; $i++){
            $data = [
                'name' => $faker->name,
                'address' => $faker->address,
                'capacity' => $faker->numberBetween(1, 100),
                'city' => $faker->city,
                'description' => $faker->text,
                'image' => $faker->imageUrl(640, 480, 'city'),
                'price' => $faker->numberBetween(1, 100),
                'contact' => $faker->phoneNumber,
            ];
            \App\Models\Gedung::create($data);
        }
    }
}
