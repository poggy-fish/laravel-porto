<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Bag',
            'slug' => 'bag'
        ]);

        Tag::create([
            'name' => 'Blouse',
            'slug' => 'blouse'
        ]);
        
        Tag::create([
            'name' => 'Clothes',
            'slug' => 'clothes'
        ]);
        
        Tag::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        
        Tag::create([
            'name' => 'Dress',
            'slug' => 'dress'
        ]);
        
        Tag::create([
            'name' => 'Fashion',
            'slug' => 'fashion'
        ]);
        
        Tag::create([
            'name' => 'Hub',
            'slug' => 'hub'
        ]);
        
        Tag::create([
            'name' => 'Jacket',
            'slug' => 'jacket'
        ]);
        
        Tag::create([
            'name' => 'Jeans',
            'slug' => 'jeans'
        ]);
        
        Tag::create([
            'name' => 'Onepiece',
            'slug' => 'onepiece'
        ]);
        
        Tag::create([
            'name' => 'Polo',
            'slug' => 'polo'
        ]);
        
        Tag::create([
            'name' => 'Shirt',
            'slug' => 'shirt'
        ]);
        
        Tag::create([
            'name' => 'Shoes',
            'slug' => 'shoes'
        ]);
        
        Tag::create([
            'name' => 'Skirt',
            'slug' => 'skirt'
        ]);
        
        Tag::create([
            'name' => 'Sports',
            'slug' => 'sports'
        ]);
        
        Tag::create([
            'name' => 'Sweater',
            'slug' => 'sweater'
        ]);
        
        Tag::create([
            'name' => 'T-shirt',
            'slug' => 't-shirt'
        ]);
        
        Tag::create([
            'name' => 'Women',
            'slug' => 'women'
        ]);
    }
}
