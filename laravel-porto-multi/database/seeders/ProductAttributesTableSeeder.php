<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_attribute')->insert([
            [
                'product_id' => 7,
                'attribute_id' => 1,
                'term_ids' => '1,2,5,7',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 7,
                'attribute_id' => 2,
                'term_ids' => '8,10,11,12',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 13,
                'attribute_id' => 2,
                'term_ids' => '10,11',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 16,
                'attribute_id' => 1,
                'term_ids' => '1,5,7',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 16,
                'attribute_id' => 2,
                'term_ids' => '8,9,10,11',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 21,
                'attribute_id' => 1,
                'term_ids' => '1,2',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 21,
                'attribute_id' => 2,
                'term_ids' => '10,11,12',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 25,
                'attribute_id' => 1,
                'term_ids' => '1,5,7',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 25,
                'attribute_id' => 2,
                'term_ids' => '8,10,11,12',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 30,
                'attribute_id' => 1,
                'term_ids' => '1,7',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 30,
                'attribute_id' => 2,
                'term_ids' => '8,10,11,12',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 35,
                'attribute_id' => 1,
                'term_ids' => '1,2,4,5,7',
                'used_for_variation' => 1
            ],
            [
                'product_id' => 35,
                'attribute_id' => 2,
                'term_ids' => '8,10,11,12',
                'used_for_variation' => 1
            ]
        ]);
    }
}
