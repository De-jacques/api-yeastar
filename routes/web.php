<?php

use App\Http\Controllers\ApiController;
use App\Http\Livewire\Dashboard;
// use App\Http\Livewire\ShowContacts;
use App\Http\Livewire\ShowExtensions;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [ApiController::class, "index"]);
Route::get('/', Dashboard::class);
// Route::get('dashboard', [ApiController::class, "dashboard"])->name('dashboard');
Route::get('/show-extensions', ShowExtensions::class)->name('show-extensions');
Route::get('dashboard', Dashboard::class)->name('dashboard');
Route::post('addExtension', [ApiController::class, "addExtension"])->name('addExtension');

