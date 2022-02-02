<?php

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



Auth::routes();



Route::group(['middleware' =>'auth'], function(){
    Route::get('/', function (){
        return view('home');
    })->name('home');
    Route::get('/home', function (){
        return view('home');
    })->name('home');
    Route::get('/newProject', [App\Http\Controllers\HomeController::class, 'newProject'])->name('newProject');
    Route::post('/newProject',[App\Http\Controllers\HomeController::class, 'store'])->name('newProject.store');
    Route::get('/planning', function (){
        return view('planning');
    });
    Route::get('/analysis', function (){
        return view('analysis');
    });
    Route::get('/execution', function (){
        return view('execution');
    });
});

Route::get('/userRegister' , function (){
    return view('auth/register');
});
Route::get('/login', function() {
    return view('auth/login');
})->name('login');
