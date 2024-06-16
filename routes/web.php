<?php

use App\Http\Controllers\Admin\CharacterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/characters', [CharacterController::class, 'index'])->name('characters.index');

Route::get('/characters/{characters}', [CharacterController::class, 'show'])->name('characters.show');