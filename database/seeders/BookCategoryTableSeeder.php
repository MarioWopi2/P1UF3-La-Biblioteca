<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        
        $lastBookInsertedId = DB::table("books")->max("id");


        for ($i = 1; $i <= $lastBookInsertedId; $i++) {
            for ($j = 0; $j < rand(1,3); $j++) {
               
                DB::table("book_category")->insert(
                    [
                        "book_id"=> $i,
                        "category_id"=>rand(1,10)
                    ]
                );

            }
        }
    }
}
