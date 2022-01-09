<?php

use App\Models\RumahSakit;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_RumahSakit;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/rumahsakit', [Controller_RumahSakit::class, 'Index']);
Route::post('/create', [Controller_RumahSakit::class, 'Create']);
Route::get('/edit/{id}', [Controller_RumahSakit::class, 'FetchID']);
Route::put('/update/{id}', [Controller_RumahSakit::class, 'Update']);
Route::get('/delete/{id}', [Controller_RumahSakit::class, 'Delete']);
