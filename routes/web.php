<?php

use App\Http\Controllers\CakeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CellphoneController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\SongController;
use Database\Factories\MascotaFactory;

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


Route::resources([
    'cellphones' => CellphoneController::class,
    'cakes' => CakeController::class,
    'songs' => SongController::class,
    'pets' => MascotaController::class
]);
