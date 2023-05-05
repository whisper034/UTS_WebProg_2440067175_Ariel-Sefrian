<?php

namespace Database\Seeders;

use App\Models\Coffee;
use Illuminate\Database\Seeder;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // signature
        Coffee::insert([
            'coffee_name' => 'Java Chip Frappuccino',
            'category_id' => 1,
            'price' => 60000,
            'image_source' => '/images/coffees/signature/signature_1.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Green Tea Latte',
            'category_id' => 1,
            'price' => 45000,
            'image_source' => '/images/coffees/signature/signature_2.png'
        ]);

        Coffee::insert([
            'coffee_name' => 'Iced Shaken Hibiscus Tea with Lemonade',
            'category_id' => 1,
            'price' => 50000,
            'image_source' => '/images/coffees/signature/signature_3.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Signature Chocolate',
            'category_id' => 1,
            'price' => 100000,
            'image_source' => '/images/coffees/signature/signature_4.png'
        ]);

        // espresso
        Coffee::insert([
            'coffee_name' => 'Caffe Americano',
            'category_id' => 2,
            'price' => 40000,
            'image_source' => '/images/coffees/espresso/espresso_1.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Espresso Machiato',
            'category_id' => 2,
            'price' => 50000,
            'image_source' => '/images/coffees/espresso/espresso_2.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Double Shot Iced Shaken Espresso',
            'category_id' => 2,
            'price' => 60000,
            'image_source' => '/images/coffees/espresso/espresso_3.jpg'
        ]);

        // brewed
        Coffee::insert([
            'coffee_name' => 'Vanilla Sweet Cream Cold Brew',
            'category_id' => 3,
            'price' => 44000,
            'image_source' => '/images/coffees/brewed/brewed_1.jpeg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Misto',
            'category_id' => 3,
            'price' => 44000,
            'image_source' => '/images/coffees/brewed/brewed_2.jpg'
        ]);

        // blended
        Coffee::insert([
            'coffee_name' => 'Hazelnut Frappuccino',
            'category_id' => 4,
            'price' => 44000,
            'image_source' => '/images/coffees/blended/blended_1.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Raspberry Currant Frappuccino',
            'category_id' => 4,
            'price' => 42000,
            'image_source' => '/images/coffees/blended/blended_2.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Asian Dolce Frappuccino',
            'category_id' => 4,
            'price' => 50000,
            'image_source' => '/images/coffees/blended/blended_3.jpg'
        ]);

        Coffee::insert([
            'coffee_name' => 'Mocha Jelly Frappuccino',
            'category_id' => 4,
            'price' => 52000,
            'image_source' => '/images/coffees/blended/blended_4.jpg'
        ]);
    }
}
