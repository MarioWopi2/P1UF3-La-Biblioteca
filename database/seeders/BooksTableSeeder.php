<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //➢ Crear seeders para las tablas books y categories bajo el nombre
        // BooksTableSeeder y CategoriesTableSeeder respectivamente. Cada
        // seeder debe generar 10 registros aleatorios con datos “realistas”.
        

        $faker = Faker::create();

        $lastInsertedId = DB::table("books")->max("id");

        for ($i = $lastInsertedId; $i < 10; $i++) {
            DB::table("books")->insert(
                [
                    "id" => $i + 1,
                    "isbn"=> $faker->isbn10,
                    "title"=> $faker->company,
                    "author"=> $faker->name,
                    "published_date"=> $faker->date,
                    "description"=> $faker->text,
                    "price"=> $faker->randomFloat(2,1,100),
                    "created_at"=> $faker->dateTimeBetween("-2 year", "now")->format('Y-m-d'),
                    "updated_at"=> $faker->dateTimeBetween("-2 year", "now")->format('Y-m-d'),
                ]
            );
        }
    }
}
