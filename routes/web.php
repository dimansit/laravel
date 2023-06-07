<?php

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

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController as PublicNewsController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});

Route::get('/',
    [
        GreetingController::class, 'index'
    ]
)->name('greeting');;

//routs
Route::get('/news/',
    [
        PublicNewsController::class, 'index'
    ]
)->name('news');

Route::get('/news/category/{category}',
    [
        PublicNewsController::class, 'category'
    ]
)
    ->where('category', '\d+')
    ->name('news');

Route::get('/newscategoryes',
    [
        CategoryController::class, 'index'
    ]
);

Route::get('/news/{id}',
    [
        PublicNewsController::class, 'show'
    ]
)
    ->where('id', '\d+')
    ->name('news.show');

Route::get('/login',
    [
        LoginController::class, 'index'
    ]
)->name('login');

Route::get('/{page}', function ($page) {
    return view($page);
});

