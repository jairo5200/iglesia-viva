<?php

use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::controller(PageController::class)->group(function (){

    //enrutamiento hacia la pagina home
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    //enrutamiento hacia la pagina post recibe como parametro la url limpia del post
    Route::get('blog/{post:slug}', 'post')->name('post');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    /* Route::get('/dashboard', [PageController::class, 'index'] )->name('dashboard'); */
    Route::get('/perfil', function () {
        return view('profile.show');
    })->name('perfil');
});
