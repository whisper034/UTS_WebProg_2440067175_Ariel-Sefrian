<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\CoffeeCategory;
use App\Models\User;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function signature($id) {
        $user = User::find($id);
        $category = CoffeeCategory::orderBy('id')->get();
        $coffee = Coffee::where('category_id', 1)->get();

        return view('/page/espressoPage', [
            'active' => "Profile",
            'users' => $user,
            'categories' => $category,
            'coffees' => $coffee,
            'currCoffee' => "Espresso"
        ]);
    }

    public function espresso($id) {
        $user = User::find($id);
        $category = Category::orderBy('id')->get();
        $coffee = Coffee::where('category_id', 2)->get();

        $hour = date('G');
        if($hour >= 5 && $hour <= 11) {
            $greet = 'Good Morning';
        }
        else if($hour >= 12 && $hour <= 17) {
            $greet = 'Good Afternoon';
        }
        else {
            $greet = 'Good Evening';
        }

        return view('/page/blendedPage', [
            'title' => "Profile",
            'greet' => $greet,
            'users' => $user,
            'categories' => $category,
            'coffees' => $coffee,
            'currCoffee' => "Blended"
        ]);
    }

    public function brewed($id) {
        $user = User::find($id);
        $category = Category::orderBy('id')->get();
        $coffee = Coffee::where('category_id', 3)->get();

        $hour = date('G');
        if($hour >= 5 && $hour <= 11) {
            $greet = 'Good Morning';
        }
        else if($hour >= 12 && $hour <= 17) {
            $greet = 'Good Afternoon';
        }
        else {
            $greet = 'Good Evening';
        }

        return view('/page/brewedPage', [
            'title' => "Profile",
            'greet' => $greet,
            'users' => $user,
            'categories' => $category,
            'coffees' => $coffee,
            'currCoffee' => "Brewed"
        ]);
    }

    public function blended($id) {
        $user = User::find($id);
        $category = Category::orderBy('id')->get();
        $coffee = Coffee::where('category_id', 4)->get();

        $hour = date('G');
        if($hour >= 5 && $hour <= 11) {
            $greet = 'Good Morning';
        }
        else if($hour >= 12 && $hour <= 17) {
            $greet = 'Good Afternoon';
        }
        else {
            $greet = 'Good Evening';
        }

        return view('/page/nonCoffeePage', [
            'title' => "Profile",
            'greet' => $greet,
            'users' => $user,
            'categories' => $category,
            'coffees' => $coffee,
            'currCoffee' => "Non-Coffee"
        ]);
    }
}
