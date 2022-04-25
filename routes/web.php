<?php


use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;


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
//1 Write in route
Route::get('/hello', function () {
    return 'Hello World';
});
//2 Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

//3 Call Controller Function
Route::get('/', [HomeController::class, 'index'])->name('home');

//4 Rote-> Controller-> View
Route::get('/test', [HomeController::class, 'test'])->name('test');

//5 Rote-> Controller-> View
Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

//6 Route with post
Route::post('/save', [HomeController::class, 'save'])->name('save');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//******************************* ADMİN PANEL ROUTES **********************************//
Route::prefix('admin')->name('admin.')->group(function () {


    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

//******************************* ADMİN CATEGORY ROUTES **********************************//
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/show/{id}', 'show')->name('show');

    });

    //******************************* ADMİN PRODUCT ROUTES **********************************//
    Route::prefix('home')->name('home.')->controller(AdminProductController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/show/{id}', 'show')->name('show');

    });


});
