<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LatestArticleController;
use App\Http\Controllers\RecentNewsController;

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

Route::get('/',[RecentNewsController::class,'indexed'])->name('home');
Route::get('/welcome',[HomeController::class,'welcome'])->name('welcome')->middleware(['auth']);
Route::get('/signup',[HomeController::class,'signup'])->name('signup');
Route::post('/signup-user', [FormController::class, 'signupUser'])->name('signup-user');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/login-user',[FormController::class,'loginUser'])->name('login-user');
Route::get('/recentnews', [RecentNewsController::class, 'index'])->name('recentnews.index');
Route::get('/recentnews/create', [RecentNewsController::class, 'create'])->name('recentnews.create')->middleware(['auth']);
Route::get('/recentnews/edit', [RecentNewsController::class, 'edit'])->name('recentnews.edit')->middleware(['auth']);
Route::post('/recentnews', [RecentNewsController::class, 'store'])->name('recentnews.store')->middleware(['auth']);
Route::post('/recentnews/update/{id}', [RecentNewsController::class, 'update'])->name('recentnews.update')->middleware(['auth']);
Route::get('/allrecentnews',[RecentNewsController::class,'index'])->name('recentnews');
Route::get('/delete/{id}',[RecentNewsController::class,'destroy'])->name('deleterecentnews');
Route::get('/admin',[HomeController::class,'admin'])->name('admin')->middleware(['auth']);
Route::get('/recent',[RecentNewsController::class,'recent'])->name('recent');

Route::get('/latestarticle', [LatestArticleController::class, 'index'])->name('LatestArticles.index');
Route::get('/latestarticle/create', [LatestArticleController::class, 'create'])->name('LatestArticles.create')->middleware(['auth']);
Route::post('/latestarticles', [LatestArticleController::class, 'store'])->name('latestarticle.store')->middleware(['auth']);

