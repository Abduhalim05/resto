<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Site\MenuController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\DishController;
use App\Http\Controllers\Site\ReservationController;
use App\Http\Controllers\Site\TeamController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SliderPhotoController;
use App\Http\Controllers\Admin\AboutsController;
use App\Http\Controllers\Admin\MealsController;
use App\Http\Controllers\Admin\TeamsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\PageController;

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


route::get('/',[PageController::class, 'home'])->name('home') ;
// for admin routes:

Route::get('/admin/posts', function () {
    return view('admin.posts.index');
})->middleware(['auth'])->name('postIndex');


Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function (){

    Route::get('/dashboard', [AdminController::class, 'dashboard'] )->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('sliderPhoto', SliderPhotoController::class);
    Route::resource('abouts', AboutsController::class);
    Route::resource('meals', MealsController::class);
    Route::resource('teams', TeamsController::class);
    Route::resource('teams', TeamsController::class);
    Route::resource('contact', ContactController::class);


});

// this is the end of admin-routes


route::get('/about',[PageController::class, 'about'])->name('about.index') ;
route::get('/dishes',[PageController::class, 'dish'])->name('dishes.index') ;
route::get('/menu',[PageController::class, 'menu'])->name('menu.index') ;
route::get('/team',[PageController::class, 'team'])->name('team.index') ;
route::get('/reservation',[PageController::class, 'reservation'])->name('reservation.index') ;




require __DIR__.'/auth.php';
