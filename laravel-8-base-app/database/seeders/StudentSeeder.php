<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	foreach (range(1,200) as $index) {
            Student::insert([
                'name' => $faker->firstname,
                'email' => $faker->email,
                'mobile' => $faker->phoneNumber,

            ]);
        }
    }
}
