<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Media;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::create([
            'name' => 'post-1',
            'size' => 9095,
            'width' => 265,
            'height' => 198,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/post-1.jpg'
        ]);

        Media::create([
            'name' => 'post-2',
            'size' => 13652,
            'width' => 265,
            'height' => 198,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/post-2.jpg'
        ]);

        Media::create([
            'name' => 'post-3',
            'size' => 12088,
            'width' => 265,
            'height' => 198,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/post-3.jpg'
        ]);

        Media::create([
            'name' => 'post-4',
            'size' => 15289,
            'width' => 265,
            'height' => 198,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/post-4.jpg'
        ]);

        Media::create([
            'name' => 'product1',
            'size' => 20321,
            'width' => 566,
            'height' => 566,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product1.jpg'
        ]);

        Media::create([
            'name' => 'product2',
            'size' => 10997,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product2.jpg'
        ]);

        Media::create([
            'name' => 'product3',
            'size' => 20119,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Sven Doe',
            'copy_link' => '2020/10/product3.jpg',
            'author_id' => 7
        ]);

        Media::create([
            'name' => 'product4',
            'size' => 11998,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product4.jpg'
        ]);

        Media::create([
            'name' => 'product5',
            'size' => 9599,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product5.jpg'
        ]);

        Media::create([
            'name' => 'product6',
            'size' => 12210,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product6.jpg'
        ]);

        Media::create([
            'name' => 'product7',
            'size' => 10107,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'John Doe',
            'copy_link' => '2020/10/product7.jpg',
            'author_id' => 8
        ]);

        Media::create([
            'name' => 'product8',
            'size' => 19384,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product8.jpg'
        ]);

        Media::create([
            'name' => 'product8_1',
            'size' => 21063,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product8_1.jpg'
        ]);

        Media::create([
            'name' => 'product9',
            'size' => 7543,
            'width' => 700,
            'height' => 700,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product9.jpg'
        ]);

        Media::create([
            'name' => 'product10',
            'size' => 8155,
            'width' => 750,
            'height' => 750,
            'Uploaded_by' => 'John Doe',
            'copy_link' => '2020/10/product10.jpg',
            'author_id' => 8
        ]);

        Media::create([
            'name' => 'product11',
            'size' => 19642,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product11.jpg'
        ]);

        Media::create([
            'name' => 'product12',
            'size' => 6996,
            'width' => 750,
            'height' => 750,
            'Uploaded_by' => 'Sven Doe',
            'copy_link' => '2020/10/product12.jpg',
            'author_id' => 7
        ]);

        Media::create([
            'name' => 'product13',
            'size' => 10482,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product13.jpg'
        ]);

        Media::create([
            'name' => 'product14',
            'size' => 17001,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product14.jpg'
        ]);

        Media::create([
            'name' => 'product15',
            'size' => 17720,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product15.jpg'
        ]);

        Media::create([
            'name' => 'product16',
            'size' => 19401,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Joe Doe',
            'copy_link' => '2020/10/product16.jpg'
        ]);

        Media::create([
            'name' => 'product17',
            'size' => 6396,
            'width' => 566,
            'height' => 566,
            'Uploaded_by' => 'Sven Doe',
            'copy_link' => '2020/10/product17.jpg',
            'author_id' => 7
        ]);

        Media::create([
            'name' => 'product18',
            'size' => 15351,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Alex Doe',
            'copy_link' => '2020/10/product18.jpg',
            'author_id' => 6
        ]);

        Media::create([
            'name' => 'product19',
            'size' => 11467,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Sven Doe',
            'copy_link' => '2020/10/product19.jpg',
            'author_id' => 7
        ]);

        Media::create([
            'name' => 'product20',
            'size' => 27514,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Alex Doe',
            'copy_link' => '2020/10/product20.jpg',
            'author_id' => 6
        ]);

        Media::create([
            'name' => 'product21',
            'size' => 19723,
            'width' => 800,
            'height' => 800,
            'Uploaded_by' => 'Alex Doe',
            'copy_link' => '2020/10/product21.jpg',
            'author_id' => 6
        ]);

        Media::create([
            'name' => 'banner-1',
            'size' => 4775,
            'width' => 625,
            'height' => 299,
            'Uploaded_by' => 'Alex Doe',
            'copy_link' => '2020/10/banner-1.jpg',
            'author_id' => 6
        ]);

        Media::create([
            'name' => 'vendor-1',
            'size' => 2435,
            'width' => 150,
            'height' => 150,
            'Uploaded_by' => 'Alex Doe',
            'copy_link' => '2020/10/vendor-1.jpg',
            'author_id' => 6
        ]);

        Media::create([
            'name' => 'banner-2',
            'size' => 35161,
            'width' => 625,
            'height' => 300,
            'Uploaded_by' => 'Sven Doe',
            'copy_link' => '2020/10/banner-2.jpg',
            'author_id' => 7
        ]);

        Media::create([
            'name' => 'vendor-2',
            'size' => 2186,
            'width' => 140,
            'height' => 140,
            'Uploaded_by' => 'Sven Doe',
            'copy_link' => '2020/10/vendor-2.png',
            'author_id' => 7
        ]);

        Media::create([
            'name' => 'vendor-3',
            'size' => 1984,
            'width' => 142,
            'height' => 142,
            'Uploaded_by' => 'John Doe',
            'copy_link' => '2020/10/vendor-3.png',
            'author_id' => 8
        ]);
    }
}
