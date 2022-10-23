<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Articles',
            'slug' => 'articles',
            'type' => 'post'
        ]);

        Category::create([
            'name' => 'Bag',
            'slug' => 'bag',
            'type' => 'post'
        ]);

        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion',
            'type' => 'post'
        ]);

        Category::create([
            'name' => 'Model',
            'slug' => 'model',
            'type' => 'post'
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel',
            'type' => 'post'
        ]);

        Category::create([
            'name' => 'Caps',
            'slug' => 'caps'
        ]);

        Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'icon' => 'icon-category-electronics'
        ]);

        Category::create([
            'name' => '3D Printer Kit',
            'slug' => '3d-printer-kit',
            'parent' => 9
        ]);

        Category::create([
            'name' => 'Arduino Compatible Boards',
            'slug' => 'arduino-compatible-boards',
            'parent' => 9
        ]);

        Category::create([
            'name' => 'Digital Microscope',
            'slug' => 'digital-microscope',
            'parent' => 9
        ]);

        Category::create([
            'name' => 'Furniture',
            'slug' => 'furniture',
            'icon' => 'icon-category-furniture',
            'parent' => 9
        ]);

        Category::create([
            'name' => 'IP Camera',
            'slug' => 'ip-camera',
            'parent' => 9
        ]);

        Category::create([
            'name' => 'Toys',
            'slug' => 'toys',
            'parent' => 9
        ]);

        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion',
            'icon' => 'icon-category-fashion'
        ]);

        Category::create([
            'name' => 'Motors',
            'slug' => 'motors',
            'icon' => 'icon-category-motors',
            'parent' => 16
        ]);

        Category::create([
            'name' => 'Oneplus 6',
            'slug' => 'oneplus-6',
            'parent' => 16
        ]);

        Category::create([
            'name' => 'Power Bank',
            'slug' => 'power-bank',
            'parent' => 16
        ]);

        Category::create([
            'name' => 'Shoes',
            'slug' => 'shoes',
            'parent' => 16
        ]);

        Category::create([
            'name' => 'Smart Watch',
            'slug' => 'smart-watch',
            'parent' => 16
        ]);

        Category::create([
            'name' => 'Type-c cable',
            'slug' => 'type-c-cable',
            'parent' => 16
        ]);

        Category::create([
            'name' => 'Xiaomi Mi A2',
            'slug' => 'xiaomi-mi-a2',
            'parent' => 16
        ]);

        Category::create([
            'name' => 'Xiaomi Mi Band 3',
            'slug' => 'xiaomi-mi-band-3',
            'parent' => 16
        ]);

        Category::create([
            'name' => 'Garden',
            'slug' => 'garden',
            'icon' => 'icon-category-garden'
        ]);

        Category::create([
            'name' => 'Gifts',
            'slug' => 'gifts',
            'icon' => 'icon-category-gifts'
        ]);

        Category::create([
            'name' => 'Trousers',
            'slug' => 'trousers'
        ]);

        Category::create([
            'name' => 'Music',
            'slug' => 'music',
            'icon' => 'icon-category-music'
        ]);
    }
}
