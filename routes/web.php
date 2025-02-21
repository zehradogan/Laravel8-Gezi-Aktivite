<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
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
//controller'a gitmeden dosya çağırmak için kullanılır (bir dosya)
Route::get('/user', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home.index');
});

//Route::redirect('/anasayfa', '/home') ->name('anasayfa');
Route::get('/', [HomeController::class, 'index']) -> name('home');

Route::get('/home', [HomeController::class, 'index']) -> name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus']) -> name('aboutus');
Route::get('/faq', [HomeController::class, 'faq']) -> name('faq');
Route::get('/references', [HomeController::class, 'references']) -> name('references');Route::get('/contact', [HomeController::class, 'contact']) -> name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage']) -> name('sendmessage');


//Admin
Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index']) -> name('adminhome');
//Category
    Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index']) -> name('admin_category');
    Route::get('/category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add']) -> name('admin_category_add');
    Route::post('/category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create']) -> name('admin_category_create');
    Route::get('/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit']) -> name('admin_category_edit');
    Route::post('/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']) -> name('admin_category_update');
    Route::get('/category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']) -> name('admin_category_delete');
    Route::get('/category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show']) -> name('admin_category_show');


    //Contents
    Route::prefix('contents')->group(function (){

        Route::get('/', [\App\Http\Controllers\Admin\ContentsController::class, 'index']) -> name('admin_contents');
        Route::get('create', [\App\Http\Controllers\Admin\ContentsController::class, 'create']) -> name('admin_contents_add');
        Route::post('store', [\App\Http\Controllers\Admin\ContentsController::class, 'store']) -> name('admin_contents_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\ContentsController::class, 'edit']) -> name('admin_contents_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ContentsController::class, 'update']) -> name('admin_contents_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ContentsController::class, 'destroy']) -> name('admin_contents_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ContentsController::class, 'show']) -> name('admin_contents_show');

});


    //Messages
    Route::prefix('messages')->group(function (){

        Route::get('/', [MessageController::class, 'index']) -> name('admin_message');
        Route::get('edit/{id}', [MessageController::class, 'edit']) -> name('admin_message_edit');
        Route::post('update/{id}', [MessageController::class, 'update']) -> name('admin_message_update');
        Route::get('delete/{id}', [MessageController::class, 'destroy']) -> name('admin_message_delete');
        Route::get('show', [MessageController::class, 'show']) -> name('admin_message_show');

    });



    //Contents Images
    Route::prefix('image')->group(function (){

        Route::get('create/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create']) -> name('admin_image_add');
        Route::post('store/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store']) -> name('admin_image_store');
        Route::get('delete/{id}/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy']) -> name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show']) -> name('admin_image_show');

    });

    //Settings
    Route::get('/setting', [\App\Http\Controllers\Admin\SettingController::class, 'index']) -> name('admin_setting');
    Route::post('/setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update']) -> name('admin_setting_update');

});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/', [UserController::class, 'index']) -> name('profile');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile', [UserController::class, 'index']) -> name('userprofile');

});


Route::get('/admin/login', [HomeController::class, 'login']) -> name('adminlogin');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck']) -> name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout']) -> name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
