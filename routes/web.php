<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/admin', function(){
    if (Auth::check()){
        return view('admin');
    }
    return redirect('/login');
});
Route::get('/usuarios', [UsersController::class, 'index']);

Route::get('admin/{vue_capture?}', function () {
    return view('admin');
})->where('vue_capture', '[\/\w\.-]*');




Auth::routes();


Route::get('/', function () {
    return view('welcome');
});


/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
