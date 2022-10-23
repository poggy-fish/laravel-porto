<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_terms')->insert([
            [
                'product_id' => 7,
                'attribute_term_id' => 2
            ],
            [
                'product_id' => 7,
                'attribute_term_id' => 5
            ],
            [
                'product_id' => 7,
                'attribute_term_id' => 7
            ],
            [
                'product_id' => 7,
                'attribute_term_id' => 8
            ],
            [
                'product_id' => 7,
                'attribute_term_id' => 1
            ],
            [
                'product_id' => 7,
                'attribute_term_id' => 10
            ],
            [
                'product_id' => 7,
                'attribute_term_id' => 11
            ],
            [
                'product_id' => 7,
                'attribute_term_id' => 12
            ],
            [
                'product_id' => 13,
                'attribute_term_id' => 10
            ],
            [
                'product_id' => 13,
                'attribute_term_id' => 11
            ],
            [
                'product_id' => 16,
                'attribute_term_id' => 9
            ],
            [
                'product_id' => 16,
                'attribute_term_id' => 11
            ],
            [
                'product_id' => 16,
                'attribute_term_id' => 1
            ],
            [
                'product_id' => 16,
                'attribute_term_id' => 5
            ],
            [
                'product_id' => 16,
                'attribute_term_id' => 10
            ],
            [
                'product_id' => 16,
                'attribute_term_id' => 7
            ],
            [
                'product_id' => 16,
                'attribute_term_id' => 8
            ],
            [
                'product_id' => 21,
                'attribute_term_id' => 1
            ],
            [
                'product_id' => 21,
                'attribute_term_id' => 12
            ],
            [
                'product_id' => 21,
                'attribute_term_id' => 11
            ],
            [
                'product_id' => 21,
                'attribute_term_id' => 2
            ],
            [
                'product_id' => 21,
                'attribute_term_id' => 10
            ],
            [
                'product_id' => 25,
                'attribute_term_id' => 8
            ],
            [
                'product_id' => 25,
                'attribute_term_id' => 5
            ],
            [
                'product_id' => 25,
                'attribute_term_id' => 1
            ],
            [
                'product_id' => 25,
                'attribute_term_id' => 7
            ],
            [
                'product_id' => 25,
                'attribute_term_id' => 10
            ],
            [
                'product_id' => 25,
                'attribute_term_id' => 11
            ],
            [
                'product_id' => 25,
                'attribute_term_id' => 12
            ],
            [
                'product_id' => 30,
                'attribute_term_id' => 8
            ],
            [
                'product_id' => 30,
                'attribute_term_id' => 1
            ],
            [
                'product_id' => 30,
                'attribute_term_id' => 7
            ],
            [
                'product_id' => 30,
                'attribute_term_id' => 12
            ],
            [
                'product_id' => 30,
                'attribute_term_id' => 11
            ],
            [
                'product_id' => 30,
                'attribute_term_id' => 10
            ],
            [
                'product_id' => 35,
                'attribute_term_id' => 11
            ],
            [
                'product_id' => 35,
                'attribute_term_id' => 10
            ],
            [
                'product_id' => 35,
                'attribute_term_id' => 8
            ],
            [
                'product_id' => 35,
                'attribute_term_id' => 7
            ],
            [
                'product_id' => 35,
                'attribute_term_id' => 5
            ],
            [
                'product_id' => 35,
                'attribute_term_id' => 4
            ],
            [
                'product_id' => 35,
                'attribute_term_id' => 2
            ],
            [
                'product_id' => 35,
                'attribute_term_id' => 1
            ],
            [
                'product_id' => 35,
                'attribute_term_id' => 12
            ]
        ]);
    }
}
