<?php

use App\Http\Controllers\CakeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CellphoneController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use App\Models\Cellphone;
use App\Models\cake;
use App\Models\Information;
use App\Models\Mascota;
use App\Models\Song;

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

Route::post('/cellphones/importData', [CellphoneController::class, 'importData'])->name('/cellphones/importData');
Route::post('/cakes/importData', [CakeController::class, 'importData'])->name('/cakes/importData');
Route::post('/pets/importData', [MascotaController::class, 'importData'])->name('/pets/importData');
Route::post('/songs/importData', [SongController::class, 'importData'])->name('/songs/importData');
Route::get('/cellphones/import', [CellphoneController::class, 'import'])->name('/cellphones/import');
Route::get('/cakes/import', [CakeController::class, 'import'])->name('/cakes/import');
Route::get('/pets/import', [MascotaController::class, 'import'])->name('/pets/import');
Route::get('/songs/import', [SongController::class, 'import'])->name('/songs/import');
Route::get('/cellphones/exportToXlsx', [CellphoneController::class, 'exportToXlsx'])->name('/cellphones/exportToXlsx');
Route::get('/cakes/exportToXlsx', [CakeController::class, 'exportToXlsx'])->name('/cakes/exportToXlsx');
Route::get('/pets/exportToXlsx', [MascotaController::class, 'exportToXlsx'])->name('/pets/exportToXlsx');
Route::get('/songs/exportToXlsx', [SongController::class, 'exportToXlsx'])->name('/songs/exportToXlsx');
Route::get('/cellphones/cards', [CellphoneController::class, 'cards'])->name('/cellphones/cards');
Route::get('/cakes/cards', [CakeController::class, 'cards'])->name('/cakes/cards');
Route::get('/pets/cards', [MascotaController::class, 'cards'])->name('/pets/cards');
Route::get('/songs/cards', [SongController::class, 'cards'])->name('/songs/cards');
Route::get('/cellphones/chart', [CellphoneController::class, 'chart'])->name('/cellphones/chart)');
Route::get('/cakes/chart', [CakeController::class, 'chart'])->name('/cakes/chart)');
Route::get('/pets/chart', [MascotaController::class, 'chart'])->name('/pets/chart)');
Route::get('/songs/chart', [SongController::class, 'chart'])->name('/songs/chart)');
Route::get('/exportcellphonesToCSV', [CellphoneController::class, 'exportcellphonesToCSV'])->name('/exportcellphonesToCSV');
Route::get('/exportcakesToCSV', [CakeController::class, 'exportcakesToCSV'])->name('/exportcakesToCSV');
Route::get('/exportpetsToCSV', [MascotaController::class, 'exportpetsToCSV'])->name('/exportpetsToCSV');
Route::get('/exportsongsToCSV', [SongController::class, 'exportsongsToCSV'])->name('/exportsongsToCSV');

Route::get('/', function () {
    $celulares = Cellphone::all()->take(3);
    $pasteles = cake::all()->take(3);
    $mascota1 = Mascota::all()->take(3);
    $datos = Song::all()->take(3);
    $information = Information::all();
    return view('welcome')
    ->with('celulares', $celulares)
    ->with('pasteles', $pasteles)
    ->with('mascota1', $mascota1)
    ->with('datos', $datos)
    ->with('information', $information);
});


Route::resources([
    'cellphones' => CellphoneController::class,
    'cakes' => CakeController::class,
    'songs' => SongController::class,
    'pets' => MascotaController::class,
    'users' => UserController::class,
    'information'=>InformationController::class,
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
