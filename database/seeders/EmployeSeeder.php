<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//load DB dan Faker
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //jalankan factory employe untuk generate 10 data
        $faker=Faker::create('id_ID');
        for ($i=0; $i < 10; $i++) {
            DB::table('employes')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->cityName,
                'gender' => $faker->randomElement(['L','P']),
                'gaji' => $faker->randomElement([100000,80000,250000])
            ]);
        }
    }
}