<?php

namespace Database\Seeders;

use App\Models\ProductReview;
use Illuminate\Database\Seeder;

class ProductReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductReview::create([
            'product_id' => 1,
            'author_name' => 'Maria',
            'author_email' => 'maria@gmail.com',
            'rating' => 4,
            'content' => 'He really is the cutest little man. Swoooon!',
            'approved' => 1
        ]);
        
        ProductReview::create([
            'product_id' => 2,
            'author_name' => 'Cobus Bester',
            'author_email' => 'cobus@gmail.com',
            'rating' => 4,
            'content' => 'Wonderful collection of WooThemes classics! A must buy for all Woo fans.',
            'approved' => 1
        ]);
        
        ProductReview::create([
            'product_id' => 3,
            'author_name' => 'Cobus Buster',
            'author_email' => 'cobus@gmail.com',
            'rating' => 4,
            'content' => 'This album proves why The Woo are the best band ever. Best music ever!',
            'approved' => 1
        ]);
        
        ProductReview::create([
            'product_id' => 3,
            'author_name' => 'Maria',
            'author_email' => 'maria@gmail.com',
            'rating' => 5,
            'content' => 'Can’t wait to start mixin’ with this one! Irba-irr-Up-up-up-up-date your theme!',
            'approved' => 1
        ]);
        
        ProductReview::create([
            'product_id' => 4,
            'author_name' => 'Joe Doe',
            'author_email' => 'joe@gmail.com',
            'rating' => 4,
            'content' => 'Great!',
            'approved' => 1
        ]);
        
        ProductReview::create([
            'product_id' => 7,
            'author_name' => 'Joe Doe',
            'author_email' => 'joe@gmail.com',
            'rating' => 5,
            'content' => 'Awesome!',
            'approved' => 1
        ]);
        
        ProductReview::create([
            'product_id' => 7,
            'author_name' => 'Joe Doe',
            'author_email' => 'joe@gmail.com',
            'rating' => 4,
            'content' => 'Excellent.',
            'approved' => 1
        ]);
        
        ProductReview::create([
            'product_id' => 16,
            'author_name' => 'Joe Doe',
            'author_email' => 'joe@gmail.com',
            'rating' => 4,
            'content' => 'Awesome!',
            'approved' => 1
        ]);
        
        ProductReview::create([
            'product_id' => 21,
            'author_name' => 'Joe Doe',
            'author_email' => 'joe@gmail.com',
            'rating' => 4,
            'content' => 'Awesome!',
            'approved' => 1
        ]);
        
        ProductReview::create([
            'product_id' => 25,
            'author_name' => 'Joe Doe',
            'author_email' => 'joe@gmail.com',
            'rating' => 4,
            'content' => 'A!!',
            'approved' => 1
        ]);
        
        ProductReview::create([
            'product_id' => 35,
            'author_name' => 'Cobus Bester',
            'author_email' => 'cobus@gmail.com',
            'rating' => 4,
            'content' => 'Great!',
            'approved' => 1
        ]);
        
        ProductReview::create([
            'product_id' => 42,
            'author_name' => 'Joe Doe',
            'author_email' => 'joe@gmail.com',
            'rating' => 5,
            'content' => 'Great',
            'approved' => 1
        ]);
    }
}
