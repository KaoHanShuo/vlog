<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//帶參數
// Route::get('/{id}', function ($id) {
//     return $id;
// });

//傳入controller
//Route::get('/about',[WelcomeController::class,'about']);

Route::resource('welcome', WelcomeController::class);
Route::resource('welcome.comments', WelcomeController::class)->shallow();
