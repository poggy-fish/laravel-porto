<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_tag')->insert([
            [
                'product_id' => 1,
                'tag_id' => 6
            ],
            [
                'product_id' => 1,
                'tag_id' => 7
            ],
            [
                'product_id' => 1,
                'tag_id' => 15
            ],
            [
                'product_id' => 2,
                'tag_id' => 12
            ],
            [
                'product_id' => 2,
                'tag_id' => 14
            ],
            [
                'product_id' => 3,
                'tag_id' => 16
            ],
            [
                'product_id' => 3,
                'tag_id' => 3
            ],
            [
                'product_id' => 4,
                'tag_id' => 3
            ],
            [
                'product_id' => 4,
                'tag_id' => 6
            ],
            [
                'product_id' => 5,
                'tag_id' => 3
            ],
            [
                'product_id' => 5,
                'tag_id' => 6
            ],
            [
                'product_id' => 6,
                'tag_id' => 6
            ],
            [
                'product_id' => 6,
                'tag_id' => 3
            ],
            [
                'product_id' => 42,
                'tag_id' => 3
            ],
            [
                'product_id' => 42,
                'tag_id' => 16
            ],
            [
                'product_id' => 43,
                'tag_id' => 3
            ],
            [
                'product_id' => 43,
                'tag_id' => 16
            ],
            [
                'product_id' => 44,
                'tag_id' => 16
            ],
            [
                'product_id' => 44,
                'tag_id' => 3
            ],
            [
                'product_id' => 45,
                'tag_id' => 3
            ],
            [
                'product_id' => 45,
                'tag_id' => 16
            ],
            [
                'product_id' => 46,
                'tag_id' => 15
            ],
            [
                'product_id' => 47,
                'tag_id' => 15
            ],
            [
                'product_id' => 48,
                'tag_id' => 7
            ]
        ]);
    }
}
