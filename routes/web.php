<?php


use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

//******************************* HOME PAGE ROUTES **********************************//
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');

//4 Rote-> Controller-> View
Route::get('/test', [HomeController::class, 'test'])->name('test');

//5 Rote-> Controller-> View
Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

//6 Route with post
Route::post('/save', [HomeController::class, 'save'])->name('save');

Route::get('/home/{id}', [HomeController::class, 'home'])->name('home');
Route::get('/agents', [HomeController::class, 'agents'])->name('agents');
Route::get('/agenti', [HomeController::class, 'agenti'])->name('agenti');
Route::get('/agentk', [HomeController::class, 'agentk'])->name('agentk');
Route::get('/agentn', [HomeController::class, 'agentn'])->name('agentn');



//******************************* SEARCH ROUTE **********************************//
Route::post('/getproduct',[HomeController::class, 'getproduct'])->name('getproduct');

//******************************* CATEGORY HOME ROUTES **********************************//
Route::get('/categoryhomes/{id}/{slug}',[HomeController::class,'categoryhomes'])->name('categoryhomes');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//******************************* USER AUTH CONTROL **********************************//
Route::middleware('auth')->group(function () {

    //******************************* USER PANEL ROUTES **********************************//
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviewdelete/{id}', 'destroy')->name('reviewdelete');
    });

        //******************************* ADMİN PANEL ROUTES **********************************//
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');


//******************************* GENERAL ROUTES **********************************//
        Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
        Route::post('/setting', [AdminHomeController::class, 'settingupdate'])->name('setting.update');


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

        //******************************* ADMİN PRODUCT IMAGE GALLERY ROUTES **********************************//
        Route::prefix('image')->name('image.')->controller(ImageController::class)->group(function () {
            Route::get('/{hid}', 'index')->name('index');
            Route::post('/store/{hid}', 'store')->name('store');
            Route::get('/delete/{hid}/{id}', 'destroy')->name('delete');


        });

        //******************************* ADMİN MESSAGE ROUTES **********************************//
        Route::prefix('message')->name('message.')->controller(MessageController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
            Route::get('/show/{id}', 'show')->name('show');

        });


        //******************************* ADMİN FAQ ROUTES **********************************//
        Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
            Route::get('/show/{id}', 'show')->name('show');

        });

        //******************************* ADMİN COMMENT ROUTES **********************************//
        Route::prefix('comment')->name('comment.')->controller(CommentController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
            Route::get('/show/{id}', 'show')->name('show');
        });

        //******************************* ADMİN USER ROUTES **********************************//
        Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
            Route::get('/deleterole/{uid}/{rid}', 'deleterole')->name('deleterole');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/addrole/{id}', 'addrole')->name('addrole');
        });

    });

});
