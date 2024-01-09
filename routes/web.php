<?php

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
//     return view('welcome');
// });

Route::get('/user/login', [App\Http\Controllers\User\UserController::class, 'login']);

Route::post('/user/login', [App\Http\Controllers\User\UserController::class, 'signin']);

Route::get('/user/register', [App\Http\Controllers\User\UserController::class, 'register']);

Route::post('/user/register', [App\Http\Controllers\User\UserController::class, 'create']);

Route::get('/', [App\Http\Controllers\User\UserController::class, 'Home']);

Route::get('/search', [App\Http\Controllers\User\UserController::class, 'search']);

Route::get('/library', [App\Http\Controllers\User\UserController::class, 'library']);

Route::get('/user/detail/{id}', [App\Http\Controllers\User\UserController::class, 'detail']);

Route::post('/user/detail/{id}', [App\Http\Controllers\User\UserController::class, 'buyItem']);

Route::get('/user/payment', [App\Http\Controllers\User\PayController::class, 'index']);

Route::post('/user/payment', [App\Http\Controllers\User\PayController::class, 'pay']);

Auth::routes();

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Auth'
], function () {
    Route::get('/',[App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
    Route::get('/login',[App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
    Route::post('/login',[App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout']);
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin', 
], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard']);

    //CATEGORY
    Route::get('/categorygame', [App\Http\Controllers\Admin\GameController::class, 'category']);
    Route::get('/categorygame/add', [App\Http\Controllers\Admin\GameController::class, 'categoryAdd']);
    Route::post('/categorygame/add', [App\Http\Controllers\Admin\GameController::class, 'categoryAddPost']);
    Route::get('/categorygame/edit/{id}', [App\Http\Controllers\Admin\GameController::class, 'categoryEdit']);
    Route::get('/categorygame/delete/{id}', [App\Http\Controllers\Admin\GameController::class, 'categoryDeletePost']);

    //POSTGAME
    Route::get('/postgame', [App\Http\Controllers\Admin\GameController::class, 'listGame']);
    Route::get('/postgame/add', [App\Http\Controllers\Admin\GameController::class, 'gameAdd']);
    Route::post('/postgame/add', [App\Http\Controllers\Admin\GameController::class, 'gameAddPost']);
    Route::get('/postgame/edit/{id}', [App\Http\Controllers\Admin\GameController::class, 'gameEdit']);
    Route::post('/postgame/edit/{id}', [App\Http\Controllers\Admin\GameController::class, 'gameEditPost']);
    Route::get('/postgame/delete/{id}', [App\Http\Controllers\Admin\GameController::class, 'gameDelete']);

    Route::get('/payment', [App\Http\Controllers\Admin\PayController::class, 'index']);

    Route::get('/rechargecustomers/{id}', [App\Http\Controllers\Admin\PayController::class, 'recharge']);
    Route::post('/rechargecustomers/{id}', [App\Http\Controllers\Admin\PayController::class, 'acceptRecharge']);
});