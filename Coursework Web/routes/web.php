<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', function () {
    return redirect()->route('main');
});
Route::get('/main', [WebController::class, 'main'])->name('main');
Route::get('/about', [WebController::class, 'main']);
Route::get('/services', [WebController::class, 'services'])->name('services');
Route::get('/contacts', [WebController::class, 'contacts'])->name('contacts');
Route::get('/sign_up', [WebController::class, 'sign_up'])->name('sign_up');
Route::post('/submit', [WebController::class, 'submit'])->name('form_submit');
