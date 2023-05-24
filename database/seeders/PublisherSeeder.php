<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');
        for($i=0;$i<=10;$i++){
            DB::table('boooks')->insert([
                'name' => $faker->company,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => $faker->companyEmail,
                'image' => $faker->imageUrl(),
            ]);
        }

    }
}
