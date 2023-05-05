<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // user 1
        Transaction::insert([
            'user_id' => 1,
            'coffee_id' => 1,
            'transaction_date' => '2023-03-19 11:23:00.00'
        ]);

        Transaction::insert([
            'user_id' => 1,
            'coffee_id' => 5,
            'transaction_date' => '2023-03-20 05:24:00.00'
        ]);

        Transaction::insert([
            'user_id' => 1,
            'coffee_id' => 4,
            'transaction_date' => '2023-03-21 22:20:00.00'
        ]);

        // user 2
        Transaction::insert([
            'user_id' => 2,
            'coffee_id' => 10,
            'transaction_date' => '2023-03-18 05:32:00.00'
        ]);

        Transaction::insert([
            'user_id' => 2,
            'coffee_id' => 2,
            'transaction_date' => '2023-03-19 05:14:00.00'
        ]);

        Transaction::insert([
            'user_id' => 2,
            'coffee_id' => 1,
            'transaction_date' => '2023-03-21 20:46:00.00'
        ]);
    }
}
