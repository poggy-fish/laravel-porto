<?php

namespace Database\Seeders;

use App\Models\DiscountType;
use Illuminate\Database\Seeder;

class DiscountTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiscountType::create([
            'name' => 'Percentage discount'
        ]);

        DiscountType::create([
            'name' => 'Fixed cart discount'
        ]);

        DiscountType::create([
            'name' => 'Fixed product discount'
        ]);
    }
}
