<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
     
        foreach (range(1, 10) as $index) {
            DB::table('products')->insert([
                'sku' => $faker->unique()->md5,
                'Name' => $faker->word,
                'price' =>  $faker->numberBetween($min = 1, $max = 1000),
                'description' =>  $faker->text,
                'Category' =>  $faker->word,
                'UnitsInStock' =>  $faker->numberBetween($min = 1, $max = 50),
            ]);
        }
    }
}
