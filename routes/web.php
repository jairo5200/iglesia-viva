<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\FielController;
use App\Http\Controllers\IglesiaController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaisController;
use App\Models\Departamento;
use App\Models\Iglesia;
use App\Models\Municipio;
use App\Models\Pais;
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


Route::controller(PageController::class)->group(function (){
    //enrutamiento hacia la pagina index
    Route::get('/', 'inicio')->name('inicio');
    //enrutamiento hacia la pagina dashboard
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
    Route::resource('users', UserController::class);// ruta para el controllador de user
    Route::resource('paises', PaisController::class);// ruta para el controllador de pais
    Route::resource('departamentos', DepartamentoController::class);// ruta para el controllador de departamento
    Route::resource('municipios', MunicipioController::class);// ruta para el controllador de municipio
    Route::resource('iglesias', IglesiaController::class);// ruta para el controllador de iglesia
    Route::resource('fiels', FielController::class);// ruta para el controllador de fiel

});



Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {

//Reutilizacion de la ruta de registro
Route::get(RoutePath::for('register', '/register'), [RegisteredUserController::class, 'create'])
            ->name('register');
Route::post(RoutePath::for('register', '/register'), [RegisteredUserController::class, 'store']);

// Esta ruta carga los departamentos de un determinado pais
Route::get('/paises/{id}/departamentos', function ($id){
    $pais = Pais::find($id);
    return Departamento::where('pais_id', $pais->id)->get();
});
// Esta ruta carga los municipios de un determinado departamento
Route::get('/departamentos/{id}/municipios', function ($id){
    $departamento = Departamento::find($id);
    return Municipio::where('departamento_id', $departamento->id)->get();
});
// Esta ruta carga las iglesias de un determinado municipio
Route::get('/municipios/{id}/iglesias', function ($id){
    $municipio = Municipio::find($id);
    return Iglesia::where('municipio_id', $municipio->id)->get();
});


});
