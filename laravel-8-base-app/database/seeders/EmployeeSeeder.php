<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();

        // foreach (range(1, 500) as $index) {
        //     Employee::insert([
        //         'firstname' => $faker->firstname,
        //         'lastname' => $faker->lastname,
        //         'email' => $faker->email,
        //         'dob' => $faker->date($format = 'D-m-y', $max = '2021', $min = '2010')
        //     ]);
        // }
    }
}
