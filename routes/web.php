<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
    return view('mahasiswa/index');
});

Route::resource('mahasiswa', MahasiswaController::class);

/* Route::get('/route1', function () {
    echo "<h1> Ini adalah halaman test 1 </h1>";
});

Route::get('/route2', function () {
    echo "<h1> Ini adalah halaman test 2 </h1>";
});
 */
