<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\HomeController as AuthController;

use App\Http\Controllers\Admin\PenthouseController as AdminPenthouseController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TypeController as AdminTypeController;


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

Route::get('/',  function(){
    return redirect()->route('home');
});

Route::get('/home', [IndexController::class, 'index'])->name('home');

Route::get('/profile', [AuthController::class, 'profile'])->name('profile')->middleware('auth.redirect');

Route::group([
   // 'middleware' => 'admin',
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'as' => 'admin.',
  ], function () {
      
    Route::get('/', [AdminIndexController::class, 'index'])->name('index');

    Route::prefix('penthouses')->namespace('App\Http\Controllers\Admin')->name('products.')->group(function() {
        // products Index (Admin)
        Route::get('/', [AdminPenthouseController::class, 'index'])->name('index');
        // products Create
        Route::get('/create', [AdminPenthouseController::class, 'create'])->name('create');
        // products Store
        Route::post('/', [AdminPenthouseController::class, 'store'])->name('store');
        // products Edit 
        Route::get('/{penthouse}/edit', [AdminPenthouseController::class, 'edit'])->name('edit');
        Route::get('/{penthouse}', [AdminPenthouseController::class, 'show'])->name('show');
        // products Update
        Route::patch('/{penthouse}', [AdminPenthouseController::class, 'update'])->name('update');
        // products Destroy 
        Route::delete('/{penthouse}', [AdminPenthouseController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('category')->namespace('App\Http\Controllers\Admin')->name('category.')->group(function() {
        // products Index (Admin)
        Route::get('/', [AdminCategoryController::class, 'index'])->name('index');
        // products Create
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('create');
        // products Store
        Route::post('/', [AdminCategoryController::class, 'store'])->name('store');
        // products Edit 
        Route::get('/{category}/edit', [AdminCategoryController::class, 'edit'])->name('edit');

        Route::get('/{category}', [AdminCategoryController::class, 'show'])->name('show');
        // products Update
        Route::patch('/{category}', [AdminCategoryController::class, 'update'])->name('update');
        // products Destroy 
        Route::delete('/{category}', [AdminCategoryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('user')->namespace('App\Http\Controllers\Admin')->name('user.')->group(function() {
        // products Index (Admin)
        Route::get('/', [AdminUserController::class, 'index'])->name('index');
        // products Create
        Route::get('/create', [AdminUserController::class, 'create'])->name('create');
        // products Store
        Route::post('/', [AdminUserController::class, 'store'])->name('store');
        // products Edit 
        Route::get('/{user}/edit', [AdminUserController::class, 'edit'])->name('edit');

        Route::get('/{user}', [AdminUserController::class, 'show'])->name('show');
        // products Update
        Route::patch('/{user}', [AdminUserController::class, 'update'])->name('update');
        // products Destroy 
        Route::delete('/{user}', [AdminUserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('role')->namespace('App\Http\Controllers\Admin')->name('role.')->group(function() {
        // products Index (Admin)
        Route::get('/', [RoleController::class, 'index'])->name('index');
        // products Create
        Route::get('/create', [RoleController::class, 'create'])->name('create');
        // products Store
        Route::post('/', [RoleController::class, 'store'])->name('store');
        // products Edit 
        Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('edit');

        Route::get('/{role}', [RoleController::class, 'show'])->name('show');
        // products Update
        Route::patch('/{role}', [RoleController::class, 'update'])->name('update');
        // products Destroy 
        Route::delete('/{role}', [RoleController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('type')->namespace('App\Http\Controllers\Admin')->name('type.')->group(function() {
        // products Index (Admin)
        Route::get('/', [AdminTypeController::class, 'index'])->name('index');
        // products Create
        Route::get('/create', [AdminTypeController::class, 'create'])->name('create');
        // products Store
        Route::post('/', [AdminTypeController::class, 'store'])->name('store');
        // products Edit 
        Route::get('/{product:slug}/edit', [AdminTypeController::class, 'edit'])->name('edit');
        // products Update
        Route::patch('/{product:slug}', [AdminTypeController::class, 'update'])->name('update');
        // products Destroy 
        Route::delete('/{product:slug}', [AdminTypeController::class, 'destroy'])->name('destroy');
    });

});
// Route::get('/profile', [AuthController::class, 'profile'])->name('profile')->middleware('auth.redirect');

Auth::routes();


