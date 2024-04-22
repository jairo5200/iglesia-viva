<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Features;
use Laravel\Fortify\RoutePath;
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
    Route::resource('users', UserController::class);
});



Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {

Route::get(RoutePath::for('register', '/register'), [RegisteredUserController::class, 'create'])
            ->name('register');
Route::post(RoutePath::for('register', '/register'), [RegisteredUserController::class, 'store']);


});
