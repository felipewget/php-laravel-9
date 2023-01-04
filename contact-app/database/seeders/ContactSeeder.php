<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $contacts = [];
        foreach(range(1, 10) as $index){

            $contacts[] = [
                "first_name" => $faker->firstName(),
                "last_name" => $faker->lastName(),
                "phone" => $faker->phoneNumber(),
                "email" => $faker->email(),
                "address" => $faker->address(),
                "company_id" => 23
            ];

        }

        DB::table('contacts')->delete();
        DB::table('contacts')->insert($contacts);
    }
}
