<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); //set locale
        for($i=1; $i <=5; $i++){
            DB::table('transactions')->insert ([
                'user_id' => $faker->numberBetween(1, 5),
                'name' => $faker->name(),
                'address' => $faker ->address(),
                'phone' => $faker -> phoneNumber(),
                'date' => $faker->date(),
                'court_id' => $faker -> numberBetween(1, 5),
                'starttime' => $faker ->time(),
                'endtime' => $faker ->time(),
                'costume' => $faker -> boolean(),
                'shoes' => $faker -> boolean(),
                'total' => $faker -> numberBetween(80000, 300000),
                'grandtotal' => $faker -> numberBetween(80000, 300000),
                'paytotal' => $faker -> numberBetween(80000, 300000)
            ]);
        }
    }
}
