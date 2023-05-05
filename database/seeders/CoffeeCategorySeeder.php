<?php

namespace Database\Seeders;

use App\Models\CoffeeCategory;
use Illuminate\Database\Seeder;

class CoffeeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CoffeeCategory::insert([
            'category_name' => 'Signature'
        ]);

        CoffeeCategory::insert([
            'category_name' => 'Espresso'
        ]);

        CoffeeCategory::insert([
            'category_name' => 'Brewed'
        ]);

        CoffeeCategory::insert([
            'category_name' => 'Blended'
        ]);
    }
}
