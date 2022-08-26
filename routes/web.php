<?php

use App\Http\Controllers\ApiController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\ShowContacts;
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
Route::get('/show-contacts', ShowContacts::class)->name('show-contacts');
Route::get('dashboard', Dashboard::class)->name('dashboard');

