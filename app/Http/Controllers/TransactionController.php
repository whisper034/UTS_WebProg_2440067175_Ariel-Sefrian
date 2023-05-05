<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transactions($id) {
        $user = User::find($id);

        // sort by transaction_date dari yang terbaru ke terlama
        $transactions = Transaction::where('user_id', $id)->get()->sortByDesc('transaction_date');

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

    private function updateUser($user_id) {
        $user = User::find($user_id);

        $newPoints = $user->points + 1;
        $user->points = $newPoints;

        $user->save();
    }

    public function buyProduct(Request $request) {
        Transaction::insert([
            'user_id' => $request->user_id,
            'coffee_id' => $request->coffee_id,
            'transaction_date' => $request->transaction_date
        ]);

        // update user untuk points, setiap transaksi bertambah 1 points
        $this->updateUser($request->user_id);

        return redirect()->back();
    }
}
