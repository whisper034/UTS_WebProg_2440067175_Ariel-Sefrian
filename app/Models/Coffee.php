<?php

namespace App\Models;

use App\Http\Controllers\CoffeeCategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    public function coffeeCategory(){
        return $this->belongsTo(CoffeeCategoryController::class);
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
