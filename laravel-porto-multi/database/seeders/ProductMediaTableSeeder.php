<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_media')->insert([
            [
                'product_id' => 1,
                'media_id' => 5,
                'default' => 1
            ],
            [
                'product_id' => 2,
                'media_id' => 9,
                'default' => 1
            ],
            [
                'product_id' => 3,
                'media_id' => 14,
                'default' => 1
            ],
            [
                'product_id' => 4,
                'media_id' => 10,
                'default' => 1
            ],
            [
                'product_id' => 5,
                'media_id' => 21,
                'default' => 1
            ],
            [
                'product_id' => 6,
                'media_id' => 7,
                'default' => 1
            ],
            [
                'product_id' => 7,
                'media_id' => 24,
                'default' => 1
            ],
            [
                'product_id' => 7,
                'media_id' => 6,
                'default' => 0
            ],
            [
                'product_id' => 7,
                'media_id' => 10,
                'default' => 0
            ],
            [
                'product_id' => 13,
                'media_id' => 8,
                'default' => 1
            ],
            [
                'product_id' => 16,
                'media_id' => 12,
                'default' => 1
            ],
            [
                'product_id' => 16,
                'media_id' => 13,
                'default' => 1
            ],
            [
                'product_id' => 21,
                'media_id' => 18,
                'default' => 1
            ],
            [
                'product_id' => 21,
                'media_id' => 24,
                'default' => 0
            ],
            [
                'product_id' => 25,
                'media_id' => 6,
                'default' => 1
            ],
            [
                'product_id' => 25,
                'media_id' => 8,
                'default' => 0
            ],
            [
                'product_id' => 25,
                'media_id' => 11,
                'default' => 0
            ],
            [
                'product_id' => 25,
                'media_id' => 22,
                'default' => 0
            ],
            [
                'product_id' => 30,
                'media_id' => 19,
                'default' => 1
            ],
            [
                'product_id' => 35,
                'media_id' => 20,
                'default' => 1
            ],
            [
                'product_id' => 42,
                'media_id' => 11,
                'default' => 1
            ],
            [
                'product_id' => 43,
                'media_id' => 15,
                'default' => 1
            ],
            [
                'product_id' => 44,
                'media_id' => 22,
                'default' => 1
            ],
            [
                'product_id' => 44,
                'media_id' => 24,
                'default' => 0
            ],
            [
                'product_id' => 44,
                'media_id' => 16,
                'default' => 0
            ],
            [
                'product_id' => 45,
                'media_id' => 17,
                'default' => 1
            ],
            [
                'product_id' => 45,
                'media_id' => 15,
                'default' => 0
            ],
            [
                'product_id' => 46,
                'media_id' => 23,
                'default' => 1
            ],
            [
                'product_id' => 47,
                'media_id' => 26,
                'default' => 1
            ],
            [
                'product_id' => 48,
                'media_id' => 25,
                'default' => 1
            ]
        ]);
    }
}
