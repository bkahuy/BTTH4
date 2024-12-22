<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            Book::create([
                'name' => $faker->word,
                'author' => $faker->name,
                'category' => $faker->word,
                'year' => $faker->year,
                'quantity' => $faker->randomNumber(2),
            ]);
        }
    }
}
