<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeCategory extends Model
{
    use HasFactory;

    public function coffeeItem(){
        return $this->hasMany(Coffee::class);
    }
}
