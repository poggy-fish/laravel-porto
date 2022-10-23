<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Smart Watches',
            'slug' => 'smart-watches',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 299,
            'sku' => '854613298',
            'manage_stock' => 1,
            'stock_quantity' => 10,
            'allow_backorder' => 'yes',
            'stock_status' => 'on-backorder',
            'weight' => 12,
            'height' => 16,
            'length' => 12,
            'width' => 12,
            'featured' => 1
        ]);
        
        Product::create([
            'name' => 'Computer Mouse',
            'slug' => 'computer-mouse',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 55,
            'sku' => '15615132',
            'weight' => 23,
            'height' => 23,
            'length' => 12,
            'width' => 31,
            'downloadable' => 1
        ]);
        
        Product::create([
            'name' => 'Laptop Case Bag',
            'slug' => 'laptop-case-bag',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 1999,
            'sale_price' => 1699,
            'sku' => '654613612',
            'weight' => 23,
            'height' => 12,
            'length' => 24,
            'width' => 35
        ]);
        
        Product::create([
            'name' => 'HD Camera',
            'slug' => 'hd-camera',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 299,
            'sale_price' => 199,
            'sale_schedule' => 1,
            'sale_start' => '2020-10-01',
            'sale_end' => '2025-11-26',
            'sku' => '654111995-1-1-1',
            'weight' => 23,
            'height' => 56,
            'length' => 12,
            'width' => 23,
            'downloadable' => 1
        ]);
        
        Product::create([
            'name' => 'Brown Bag',
            'slug' => 'brown-bag',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 299,
            'sku' => '654111995-1-1-2',
            'weight' => 23,
            'height' => 56,
            'length' => 12,
            'width' => 23,
            'downloadable' => 1,
            'featured' => 1
        ]);
        
        Product::create([
            'name' => 'Battery Charger',
            'slug' => 'battery-charger',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 299,
            'sku' => '654111995-1-2',
            'weight' => 23,
            'height' => 56,
            'length' => 12,
            'width' => 23,
            'downloadable' => 1,
            'author_id' => 7,
            'featured' => 1
        ]);
        
        Product::create([
            'name' => 'Black Grey Headset',
            'slug' => 'black-grey-headset',
            'type' => 'variable',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'sku' => 'R0001',
            'featured' => 1
        ]);
        
        Product::create([
            'name' => 'Black Grey Headset - Red, M',
            'slug' => 'black-grey-headset',
            'excerpt' => '[{"attrId":1,"termId":7},{"attrId":2,"termId":11}]',
            'parent' => 7,
            'price' => 39
        ]);
        
        Product::create([
            'name' => 'Black Grey Headset - Black, XL',
            'slug' => 'black-grey-headset',
            'excerpt' => '[{"attrId":1,"termId":1},{"attrId":2,"termId":8}]',
            'parent' => 7,
            'price' => 39
        ]);
        
        Product::create([
            'name' => 'Black Grey Headset - Black, M',
            'slug' => 'black-grey-headset',
            'excerpt' => '[{"attrId":1,"termId":1},{"attrId":2,"termId":11}]',
            'parent' => 7,
            'price' => 39
        ]);
        
        Product::create([
            'name' => 'Black Grey Headset - Blue, S',
            'slug' => 'black-grey-headset',
            'excerpt' => '[{"attrId":1,"termId":2},{"attrId":2,"termId":12}]',
            'parent' => 7,
            'price' => 39
        ]);
        
        Product::create([
            'name' => 'Black Grey Headset - Yellow, L',
            'slug' => 'black-grey-headset',
            'excerpt' => '[{"attrId":1,"termId":5},{"attrId":2,"termId":10}]',
            'parent' => 7,
            'price' => 39
        ]);
        
        Product::create([
            'name' => 'Black Watch',
            'slug' => 'black-watch',
            'type' => 'variable',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'sku' => 'PT0002'
        ]);
        
        Product::create([
            'name' => 'Black Watch - L',
            'slug' => 'black-watch',
            'excerpt' => '[{"attrId":2,"termId":10}]',
            'parent' => 13,
            'price' => 555
        ]);
        
        Product::create([
            'name' => 'Black Watch - M',
            'slug' => 'black-watch',
            'excerpt' => '[{"attrId":2,"termId":11}]',
            'parent' => 13,
            'price' => 999,
            'sale_price' => 666
        ]);
        
        Product::create([
            'name' => 'Black Gentle Shoes',
            'slug' => 'black-gentle-shoes',
            'type' => 'variable',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'sku' => 'PT0003'
        ]);
        
        Product::create([
            'name' => 'Black Gentle Shoes - Black, M',
            'slug' => 'black-gentle-shoes',
            'excerpt' => '[{"attrId":1,"termId":1},{"attrId":2,"termId":11}]',
            'parent' => 16,
            'price' => 108
        ]);
        
        Product::create([
            'name' => 'Black Gentle Shoes - Yellow, L',
            'slug' => 'black-gentle-shoes',
            'excerpt' => '[{"attrId":1,"termId":5},{"attrId":2,"termId":10}]',
            'parent' => 16,
            'price' => 111
        ]);
        
        Product::create([
            'name' => 'Black Gentle Shoes - Black, XL',
            'slug' => 'black-gentle-shoes',
            'excerpt' => '[{"attrId":1,"termId":1},{"attrId":2,"termId":8}]',
            'parent' => 16,
            'price' => 101
        ]);
        
        Product::create([
            'name' => 'Black Gentle Shoes - Red, XS',
            'slug' => 'black-gentle-shoes',
            'excerpt' => '[{"attrId":1,"termId":7},{"attrId":2,"termId":9}]',
            'parent' => 16,
            'price' => 105
        ]);
        
        Product::create([
            'name' => 'Casual Blue Shoes',
            'slug' => 'casual-blue-shoes',
            'type' => 'variable',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'sku' => 'PT0003-1'
        ]);
        
        Product::create([
            'name' => 'Casual Blue Shoes - Black, M',
            'slug' => 'casual-blue-shoes',
            'excerpt' => '[{"attrId":1,"termId":1},{"attrId":2,"termId":11}]',
            'parent' => 21,
            'price' => 108
        ]);
        
        Product::create([
            'name' => 'Casual Blue Shoes - Black, L',
            'slug' => 'casual-blue-shoes',
            'excerpt' => '[{"attrId":1,"termId":1},{"attrId":2,"termId":10}]',
            'parent' => 21,
            'price' => 101
        ]);
        
        Product::create([
            'name' => 'Casual Blue Shoes - Blue, S',
            'slug' => 'casual-blue-shoes',
            'excerpt' => '[{"attrId":1,"termId":2},{"attrId":2,"termId":12}]',
            'parent' => 21,
            'price' => 105
        ]);
        
        Product::create([
            'name' => 'Sport Shoes',
            'slug' => 'sport-shoes',
            'type' => 'variable',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'sku' => 'PT0006',
            'manage_stock' => 1,
            'stock_quantity' => 10
        ]);
        
        Product::create([
            'name' => 'Sport Shoes - Black, M',
            'slug' => 'sport-shoes',
            'excerpt' => '[{"attrId":1,"termId":1},{"attrId":2,"termId":11}]',
            'parent' => 25,
            'price' => 108
        ]);
        
        Product::create([
            'name' => 'Sport Shoes - Yellow, L',
            'slug' => 'sport-shoes',
            'excerpt' => '[{"attrId":1,"termId":5},{"attrId":2,"termId":10}]',
            'parent' => 25,
            'price' => 111
        ]);
        
        Product::create([
            'name' => 'Sport Shoes - Black, XL',
            'slug' => 'sport-shoes',
            'excerpt' => '[{"attrId":1,"termId":1},{"attrId":2,"termId":8}]',
            'parent' => 25,
            'price' => 101
        ]);
        
        Product::create([
            'name' => 'Sport Shoes - Red, S',
            'slug' => 'sport-shoes',
            'excerpt' => '[{"attrId":1,"termId":7},{"attrId":2,"termId":12}]',
            'parent' => 25,
            'price' => 105
        ]);
        
        Product::create([
            'name' => 'Porto Extended Camera',
            'slug' => 'porto-extended-camera',
            'type' => 'variable',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'sku' => 'PT0007',
            'manage_stock' => 1,
            'stock_quantity' => 100,
            'featured' => 1
        ]);
        
        Product::create([
            'name' => 'Porto Extended Camera - Black, M',
            'slug' => 'porto-extended-camera',
            'excerpt' => '[{"attrId":1,"termId":1},{"attrId":2,"termId":11}]',
            'parent' => 30,
            'price' => 599
        ]);
        
        Product::create([
            'name' => 'Porto Extended Camera - L',
            'slug' => 'porto-extended-camera',
            'excerpt' => '[{"attrId":1,"termId":null},{"attrId":2,"termId":10}]',
            'parent' => 30,
            'price' => 599
        ]);
        
        Product::create([
            'name' => 'Porto Extended Camera - Black, XL',
            'slug' => 'porto-extended-camera',
            'excerpt' => '[{"attrId":1,"termId":1},{"attrId":2,"termId":8}]',
            'parent' => 30,
            'price' => 599
        ]);
        
        Product::create([
            'name' => 'Porto Extended Camera - Red, S',
            'slug' => 'porto-extended-camera',
            'excerpt' => '[{"attrId":1,"termId":7},{"attrId":2,"termId":12}]',
            'parent' => 30,
            'price' => 599
        ]);
        
        Product::create([
            'name' => 'Digital Camera 16x',
            'slug' => 'digital-camera-16',
            'type' => 'variable',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'sku' => 'PT0003-2',
            'featured' => 1
        ]);
        
        Product::create([
            'name' => 'Digital Camera 16x - Green, S',
            'slug' => 'digital-camera-16',
            'excerpt' => '[{"attrId":1,"termId":4},{"attrId":2,"termId":12}]',
            'parent' => 35,
            'price' => 108
        ]);
        
        Product::create([
            'name' => 'Digital Camera 16x - Black, L',
            'slug' => 'digital-camera-16',
            'excerpt' => '[{"attrId":1,"termId":1},{"attrId":2,"termId":10}]',
            'parent' => 35,
            'price' => 111
        ]);
        
        Product::create([
            'name' => 'Digital Camera 16x - Blue, L',
            'slug' => 'digital-camera-16',
            'excerpt' => '[{"attrId":1,"termId":2},{"attrId":2,"termId":10}]',
            'parent' => 35,
            'price' => 101
        ]);
        
        Product::create([
            'name' => 'Digital Camera 16x - Red, L',
            'slug' => 'digital-camera-16',
            'excerpt' => '[{"attrId":1,"termId":7},{"attrId":2,"termId":10}]',
            'parent' => 35,
            'price' => 105
        ]);
        
        Product::create([
            'name' => 'Digital Camera 16x - Red, M',
            'slug' => 'digital-camera-16',
            'excerpt' => '[{"attrId":1,"termId":7},{"attrId":2,"termId":11}]',
            'parent' => 35,
            'price' => 108
        ]);
        
        Product::create([
            'name' => 'Digital Camera 16x - Yellow, XL',
            'slug' => 'digital-camera-16',
            'excerpt' => '[{"attrId":1,"termId":5},{"attrId":2,"termId":8}]',
            'parent' => 35,
            'price' => 111
        ]);
        
        Product::create([
            'name' => '1080p Wifi IP Camera',
            'slug' => '1080p-wifi-ip-camera',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 596,
            'sale_price' => 68,
            'sale_schedule' => 1,
            'sale_start' => '2020-10-01',
            'sale_end' => '2025-04-01',
            'sku' => '654613612-1',
            'weight' => 23,
            'height' => 35,
            'length' => 12,
            'width' => 24,
            'author_id' => 8
        ]);
        
        Product::create([
            'name' => 'Bluetooth Speaker',
            'slug' => 'bluetooth-speaker',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 59,
            'sale_price' => 49,
            'sku' => '654613612-2',
            'weight' => 23,
            'height' => 35,
            'length' => 12,
            'width' => 24,
            'author_id' => 8
        ]);
        
        Product::create([
            'name' => 'Classic Earphone',
            'slug' => 'classic-earphone',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 596,
            'sale_price' => 68,
            'sku' => '654613612-1-1',
            'weight' => 12,
            'height' => 68,
            'length' => 24,
            'width' => 35,
            'author_id' => 7
        ]);
        
        Product::create([
            'name' => 'USB Speaker',
            'slug' => 'usb-speaker',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 596,
            'sale_price' => 68,
            'sku' => '654613612-1-1-1',
            'weight' => 23,
            'height' => 35,
            'length' => 12,
            'width' => 24
        ]);
        
        Product::create([
            'name' => 'Motor Cap',
            'slug' => 'motor-cap',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 199,
            'sale_price' => 109,
            'author_id' => 6,
            'featured' => 1
        ]);
        
        Product::create([
            'name' => 'Black Watches',
            'slug' => 'black-watches',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 199,
            'sale_price' => 129,
            'author_id' => 6
        ]);
        
        Product::create([
            'name' => 'HD Camera',
            'slug' => 'hd-camera',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p><ul><li>Any Product types that You want - Simple, Configurable</li><li>Downloadable/Digital Products, Virtual Products</li><li>Inventory Management with Backordered items</li></ul><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolre eu fugiat nulla pariatur excepteur sint occaecat cupidatat non. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
            'price' => 199,
            'sale_price' => 129,
            'author_id' => 6
        ]);
    }
}
