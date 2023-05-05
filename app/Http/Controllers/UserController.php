<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homePage($id) {
        $user = User::find($id);
        $promo = Promo::orderBy('id')->get();

        return view('/main/home', [
            'active' => 'profile',
            'user' => $user,
            'promoItem' => $promo
        ]);
    }
}
