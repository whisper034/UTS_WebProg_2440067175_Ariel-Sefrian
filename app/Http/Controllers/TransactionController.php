<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transactions($id) {
        $transactions = Transaction::where('user_id', $id)->get();
        $user = User::find($id);

        foreach ($transactions as $transactionKey => $transactionValue) {
            // cari coffee yang dibeli
            $coffee = Coffee::where('id', $transactionValue->coffee_id)->get();

            // ubah format harganya
            $coffee[0]['ind_price'] = 'Rp'.number_format($coffee[0]['price'], 2, ",", ".");

            // simpan data coffee di transaction
            $transactionValue->coffee_name = $coffee[0]['coffee_name'];
            $transactionValue->ind_price = $coffee[0]['ind_price'];
            $transactionValue->image_source = $coffee[0]['image_source'];

            // ubah format date transaction_date
            $transactionValue->transaction_date_formatted = date('d F Y', strtotime
            ($transactionValue->transaction_date));
            $transactionValue->transaction_time = date('H:i', strtotime($transactionValue->transaction_date));
        }

        return view('/main/home', [
            'active' => 'transaction-history',
            'transactions' => $transactions,
            'user' => $user
        ]);
    }

    public function buyProduct(Request $request) {
        Transaction::insert([
            'user_id' => $request->user_id,
            'coffee_id' => $request->coffee_id
        ]);

        return redirect()->back();
    }
}
