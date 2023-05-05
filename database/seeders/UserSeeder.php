<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Vico Lomar',
            'level' => 'Gold',
            'points' => 175
        ]);

        User::insert([
            'name' => 'Fei Fei Li',
            'level' => 'Green',
            'points' => 25
        ]);
    }
}
