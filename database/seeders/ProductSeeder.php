<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'brand' => "Samsung",
                'model' => "S32",
                'price' => 250000,
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto saepe, consequatur exercitationem tempora amet vel magnam ad illum! Ipsum consequatur fuga enim! Minima fugiat nisi voluptates fuga, vel ea pariatur!",
                'sale' => false,
                'category_id' => 1,
            ],
            [
                'brand' => "Motoral",
                'model' => "G20",
                'price' => 215000,
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto saepe, consequatur exercitationem tempora amet vel magnam ad illum! Ipsum consequatur fuga enim! Minima fugiat nisi voluptates fuga, vel ea pariatur!",
                'sale' => true,
                'category_id' => 1,
            ],
            [
                'brand' => "Samsung",
                'model' => "A25",
                'price' => 180000,
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto saepe, consequatur exercitationem tempora amet vel magnam ad illum! Ipsum consequatur fuga enim! Minima fugiat nisi voluptates fuga, vel ea pariatur!",
                'sale' => true,
                'category_id' => 1,
            ],
            [
                'brand' => "Motoral",
                'model' => "E40",
                'price' => 220000,
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto saepe, consequatur exercitationem tempora amet vel magnam ad illum! Ipsum consequatur fuga enim! Minima fugiat nisi voluptates fuga, vel ea pariatur!",
                'sale' => false,
                'category_id' => 1,
            ],
            [
                'brand' => "Motoral",
                'model' => "E20",
                'price' => 190000,
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto saepe, consequatur exercitationem tempora amet vel magnam ad illum! Ipsum consequatur fuga enim! Minima fugiat nisi voluptates fuga, vel ea pariatur!",
                'sale' => true,
                'category_id' => 1,
            ],
        ]);
    }
}
