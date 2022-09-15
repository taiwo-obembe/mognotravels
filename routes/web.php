<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controller;
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

Route::get('/login', [Controller\Auth\LoginController::class, 'loginView'])->name('login');
Route::post('/login', [Controller\Auth\LoginController::class, 'login'])->name('auth.login.account');
Route::get('/logout', [Controller\Auth\LoginController::class, 'logout'])->name('auth.logout');

Route::get('/', [Controller\Travels\TravelToursController::class, 'dashboard'])->name('user.dashboard');
Route::get('/admin', [Controller\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');


// Travels Guide Routetags

Route::get('/travels', [Controller\Travels\TravelToursController::class, 'travels'])->name('user.travels.guide');
Route::get('/travels/tags', [Controller\Tag\TagController::class, 'tags'])->name('user.travels.tag');
Route::post('/travels/tag/create', [Controller\Tag\TagController::class, 'createTag'])->name('user.travels.tag.create');
Route::post('/travels/tag/update', [Controller\Tag\TagController::class, 'updateTag'])->name('user.travels.tag.update');
Route::post('/travels/guide/create', [Controller\Travels\TravelToursController::class, 'createTravelGuides'])->name('user.travels.guide.create');
Route::post('/travels/guide/update', [Controller\Travels\TravelToursController::class, 'updateTravelGuides'])->name('user.travels.guide.update');
Route::delete('/travels/guide/delete', [Controller\Travels\TravelToursController::class, 'deleteTravelGuides'])->name('user.travels.guide.delete');
