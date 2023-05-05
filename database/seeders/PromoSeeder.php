<?php

namespace Database\Seeders;

use App\Models\Promo;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promo::insert([
            'promo_name' => 'Buy 1 Free 1 on any Frappuccino!',
            'promo_description' => 'Buy 1 Free 1 on any Frappuccino for every Thursday. Valid until 23rd February 2023.',
            'image_source' => '/images/promos/promo_1.jpeg'
        ]);

        Promo::insert([
            'promo_name' => 'Buy 1 Free 1 for every Handcrafted Beverage!',
            'promo_description' => 'Buy 1 Free 1 for every Handcrafted Beverage. Valid until 11th November 2022.',
            'image_source' => '/images/promos/promo_2.jpg'
        ]);

        Promo::insert([
            'promo_name' => 'Summer-Y Deals!',
            'promo_description' => 'Summery Deals! Buy 1 Free 1 Grande Size.',
            'image_source' => '/images/promos/promo_3.jpg'
        ]);
    }
}
