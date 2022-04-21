<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController;

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
Route::get('/',[HomeController::class,'index'])->name('home');

//4 Rote-> Controller-> View
Route::get('/test', [HomeController::class,'test'])->name('test');

//5 Rote-> Controller-> View
Route::get('/param/{id}/{number}', [HomeController::class,'param'])->name('param');

//6 Route with post
Route::post('/save', [HomeController::class,'save'])->name('save');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//******************************* ADMİN PANEL ROUTES **********************************//
Route::get('/admin',[AdminHomeController::class,'index'])->name('admin');

//******************************* ADMİN CATEGORY ROUTES **********************************//
Route::get('/admin/category',[CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store',[CategoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}',[CategoryController::class,'update'])->name('admin_category_update');
Route::get('/admin/category/delete/{id}',[CategoryController::class,'destroy'])->name('admin_category_delete');
Route::get('/admin/category/show/{id}',[CategoryController::class,'show'])->name('admin_category_show');
