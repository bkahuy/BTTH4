<?php

namespace Database\Seeders;
use App\Models\Book;
use Faker\Factory as Faker;
use App\Models\Borrow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 20; $i++){
            Borrow::create([
                'reader_id' => $faker->numberBetween(1, 20),
                'book_id' => $faker->numberBetween(1, 20),
                'borrow_date' => $faker->date(),
                'return_date' => $faker->date(),
                'status' => $faker->numberBetween(0, 1),
            ]);
        }
    }
}
