<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);

        // products
        $this->call(ProductsTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(AttributeTermsTableSeeder::class);
        $this->call(ProductAttributesTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ProductMediaTableSeeder::class);
        $this->call(ProductTermsTableSeeder::class);
        $this->call(ProductTagsTableSeeder::class);
        $this->call(ProductFilesTableSeeder::class);
        $this->call(ProductReviewsTableSeeder::class);

        // posts
        $this->call(PostsTableSeeder::class);
        $this->call(PostCommentsTableSeeder::class);
        $this->call(PostCategoriesTableSeeder::class);
        $this->call(PostMediaTableSeeder::class);
        $this->call(PostTagsTableSeeder::class);

        // shipping
        $this->call(ShippingZonesTableSeeder::class);
        $this->call(ShippingZoneMethodsTableSeeder::class);
        $this->call(ShippingLocationsTableSeeder::class);

        $this->call(CouponsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);
        $this->call(OrderCouponsTableSeeder::class);

        // tax
        $this->call(TaxRatesTableSeeder::class);

        // Vendor
        $this->call(VendorsTableSeeder::class);
    }
}
