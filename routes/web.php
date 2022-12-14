<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
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

Route::get('/', [FrontendController::class, 'home']);


Route::middleware(['auth'])->group(function(){
// dashboard
Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

// posts
Route::resource('posts', PostController::class);
});


require __DIR__.'/auth.php';
