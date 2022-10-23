<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create([
            'store_name' => 'Porto Vendor',
            'user_id' => 6,
            'banner_image' => 27,
            'profile_image' => 28,
            'phone' => '123456789',
            'paypal_email' => 'alex@gmail.com',
            'street' => 'blabla',
            'postcode' => '12345',
            'country' => 'US',
            'state' => 'CA',
            'city' => 'blabla',
            'status' => true
        ]);
        
        Vendor::create([
            'store_name' => 'Vendor 1',
            'user_id' => 7,
            'banner_image' => 29,
            'profile_image' => 30,
            'phone' => '012345678',
            'paypal_email' => 'sven@gmail.com',
            'street' => 'blabla',
            'postcode' => '11111',
            'country' => 'US',
            'state' => 'CA',
            'city' => 'blabla',
            'status' => true
        ]);
        
        Vendor::create([
            'store_name' => 'Vendor 2',
            'user_id' => 8,
            'profile_image' => 31,
            'phone' => '111111',
            'paypal_email' => 'alex@gmail.com',
            'street' => 'blabla',
            'postcode' => '12345',
            'country' => 'US',
            'state' => 'CA',
            'city' => 'blabla',
            'status' => true
        ]);
    }
}
