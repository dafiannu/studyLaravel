<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=1; $i <=5; $i++){
            DB::table('courts')->insert ([
                'court__type_id' => $faker ->numberBetween(1, 2),
                'name' => $faker->word(). ' court',
                'price' => $faker ->numberBetween(80000, 300000)
            ]);
        }  
    }
}
