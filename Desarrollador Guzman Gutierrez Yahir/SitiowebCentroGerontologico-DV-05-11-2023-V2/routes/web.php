<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adulto_mayor\LessonController;
use Laravel\Fortify\src\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\src\Http\Controllers\AdultoMayorLoginController;
use App\Http\Controllers\AdultoMayor\LoginController;

use App\Http\Controllers\LogoutDueToInactivityController;
use App\Http\Controllers\Auth\CustomAuthenticatedSessionController;


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
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login-redirect', \App\Http\Controllers\Auth\LoginRedirectController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:adulto_mayor', 'prefix' => 'adulto_mayor', 'as' => 'adulto_mayor.'], function () {
        Route::resource('lessons', \App\Http\Controllers\Adulto_mayor\LessonController::class);
    });
    Route::group(['middleware' => 'role:doctor', 'prefix' => 'doctor', 'as' => 'doctor.'], function () {
        Route::resource('servicios', \App\Http\Controllers\Doctores\ServiciosController::class);
    });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    });
});

//ruta para la inactividad
Route::get('/logout-due-to-inactivity', [LogoutDueToInactivityController::class, 'logoutDueToInactivity'])
    ->name('logout-due-to-inactivity');

// rutas para el adulto mayor
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login/adulto-mayor', [LoginController::class, 'create'])->name('login.adulto-mayor');

    Route::post('/login/adulto-mayor', [LoginController::class, 'store']);
});
