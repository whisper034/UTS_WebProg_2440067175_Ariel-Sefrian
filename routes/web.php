<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CoffeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('instruction.instruction');
});

Route::get('/{id}', [UserController::class, 'homePage']);

Route::get('/{id}/transaction-history', [TransactionController::class, 'transactions']);
Route::post('/buy-product', [TransactionController::class, 'buyProduct'])->name('buy-product');

Route::get('/{id}/coffee/signature', [CoffeeController::class, 'onActiveSignature']);
Route::get('/{id}/coffee/espresso', [CoffeeController::class, 'onActiveEspresso']);
Route::get('/{id}/coffee/brewed', [CoffeeController::class, 'onActiveBrewed']);
Route::get('/{id}/coffee/blended', [CoffeeController::class, 'onActiveBlended']);
