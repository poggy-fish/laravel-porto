<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AttributeTerm;

class AttributeTermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttributeTerm::create([
            'attribute_id' => 1,
            'name' => '#6085a5',
            'slug' => 'black'
        ]);
        
        AttributeTerm::create([
            'attribute_id' => 1,
            'name' => '#11426b',
            'slug' => 'blue'
        ]);
        
        AttributeTerm::create([
            'attribute_id' => 1,
            'name' => '#b19970',
            'slug' => 'brown'
        ]);
        
        AttributeTerm::create([
            'attribute_id' => 1,
            'name' => '#81d742',
            'slug' => 'green'
        ]);
        
        AttributeTerm::create([
            'attribute_id' => 1,
            'name' => '#eded65',
            'slug' => 'yellow'
        ]);
        
        AttributeTerm::create([
            'attribute_id' => 1,
            'name' => '#6085a5',
            'slug' => 'indigo'
        ]);
        
        AttributeTerm::create([
            'attribute_id' => 1,
            'name' => '#ab6e6e',
            'slug' => 'red'
        ]);

        AttributeTerm::create([
            'attribute_id' => 2,
            'name' => 'XL',
            'slug' => 'xl'
        ]);

        AttributeTerm::create([
            'attribute_id' => 2,
            'name' => 'XS',
            'slug' => 'xs'
        ]);

        AttributeTerm::create([
            'attribute_id' => 2,
            'name' => 'L',
            'slug' => 'l'
        ]);

        AttributeTerm::create([
            'attribute_id' => 2,
            'name' => 'M',
            'slug' => 'm'
        ]);

        AttributeTerm::create([
            'attribute_id' => 2,
            'name' => 'S',
            'slug' => 's'
        ]);
    }
}
