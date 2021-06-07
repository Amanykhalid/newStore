<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\UserController;
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

Route::get('/create', [UserController::class, 'create'])->name('admin.register');
// Route::get('/create', [UserController::class, 'create'])->name('user.create');

Route::post('/store', [UserController::class, 'store'])->name('user.store');

// 'DashboardController@index'
// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::namespace('Admin')
    ->prefix('admin')
    ->as('admin.')
    ->group(function() {
        Route::group([
            'prefix' => 'categories',
            'as' => 'categories.',
        ], function() {
            // admin.categories.index
            Route::get('/', [CategoriesController::class,'index'])->name('index');
            // admin.categories.create
            Route::get('/create', [CategoriesController::class,'create'])->name('create');
            Route::get('/{id}', [CategoriesController::class,'show'])->name('show');
            Route::post('/', [CategoriesController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [CategoriesController::class, 'edit'])->name('edit');
            Route::put('/{id}', [CategoriesController::class, 'update'])->name('update');
            Route::delete('/{id}', [CategoriesController::class, 'destroy'])->name('destroy');
        });
        Route::resource('products', 'ProductController')->names([
            'index' => 'products.index',
    ]);
});

//Route::resource('admin/categories', 'Admin\CategoriesController');
// Route::resource('admin/products', 'Admin\ProductController');


/*
Route::prefix('admin/categories')
    ->namespace('Admin')
    ->as('admin.categories.')
    ->group(function() {
        
    });
*/