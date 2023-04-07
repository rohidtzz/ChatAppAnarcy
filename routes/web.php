<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashController;
use App\Http\Controllers\ChatController;

use App\Http\Controllers\AuthController;

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
    return view('login');
});

// Route::group(['middleware' => ['role:admin']], function () {

// });

Route::middleware(['CheckLogin'])->group(function () {

    route::get('/chat',[DashController::class,'index']);
    route::get('/chat/get',[ChatController::class,'get_chat']);

    route::post('/chat/store',[ChatController::class,'store'])->name('add.form');

});

route::POST('register/post',[AuthController::class, 'register_post']);

route::get('register',[AuthController::class, 'register']);

route::get('logout',[AuthController::class, 'logout']);

route::get('login',[AuthController::class, 'login']);

route::post('login/post',[AuthController::class, 'login_post']);





