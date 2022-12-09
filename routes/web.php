<?php

use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('principal');
});

Route::get('/hotel', function () {
    return view('auth.formHotel');
});

Route::get('/crear-cuenta', function () {
    return view('auth.register');
});
Route::get('/iniciar-sesion', function () {
    return view('auth.login');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/galeria', function () {
    return view('galery');
});
Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/login-admin',[Login::class,'index'])->name('login-admin');
Route::post('/login-admin',[Login::class,'store']);
Route::view('/layouts.dashboard','layouts.dashboard');
Route::view('/partials.showbebidas','partials.showbebidas');
Route::view('/partials.showDesayunos','partials.showDesayunos');
Route::view('/partials.showAlmuerzos','partials.showAlmuerzos');
Route::view('/partials.showComidas','partials.showComidas');
Route::view('/partials.showClientes','partials.showClientes');
Route::view('/partials.showUsuarios','partials.showUsuarios');




Route::get('/menu', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

