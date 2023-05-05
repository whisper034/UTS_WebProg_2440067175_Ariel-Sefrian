<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\CoffeeCategory;
use App\Models\User;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    private function formatPriceInd($coffees): void
    {
        foreach ($coffees as $coffeeKey => $coffeeValue) {
            // ubah format harganya
            $coffeeValue['ind_price'] = 'Rp'.number_format($coffeeValue['price'], 2, ",", ".");
        }
    }

    public function onActiveSignature($id) {
        $user = User::find($id);
        $categories = CoffeeCategory::orderBy('id')->get();
        $coffees = Coffee::where('category_id', 1)->get();

        // ubah format harganya
        $this->formatPriceInd($coffees);

        return view('/main/home', [
            'active' => "coffee-list-signature",
            'user' => $user,
            'categories' => $categories,
            'coffees' => $coffees
        ]);
    }

    public function onActiveEspresso($id) {
        $user = User::find($id);
        $categories
            = CoffeeCategory::orderBy('id')->get();
        $coffees = Coffee::where('category_id', 2)->get();

        // ubah format harganya
        $this->formatPriceInd($coffees);

        return view('/main/home', [
            'active' => "coffee-list-espresso",
            'user' => $user,
            'categories' => $categories,
            'coffees' => $coffees
        ]);
    }

    public function onActiveBrewed($id) {
        $user = User::find($id);
        $categories
            = CoffeeCategory::orderBy('id')->get();
        $coffees = Coffee::where('category_id', 3)->get();

        // ubah format harganya
        $this->formatPriceInd($coffees);

        return view('/main/home', [
            'active' => "coffee-list-brewed",
            'user' => $user,
            'categories' => $categories,
            'coffees' => $coffees
        ]);
    }

    public function onActiveBlended($id) {
        $user = User::find($id);
        $categories
            = CoffeeCategory::orderBy('id')->get();
        $coffees = Coffee::where('category_id', 4)->get();

        // ubah format harganya
        $this->formatPriceInd($coffees);

        return view('/main/home', [
            'active' => "coffee-list-blended",
            'user' => $user,
            'categories' => $categories,
            'coffees' => $coffees
        ]);
    }
}
