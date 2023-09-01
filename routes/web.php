<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

//PostController
Route::group(['namespace'=>'App\Http\Controllers\Post'], function() {
    Route::get('/', 'HomeController')->name('home.index');
    Route::get('/forms', 'FormController')->name('form.index');
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts/{id}', 'ShowController')->name('post.show');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{id}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{id}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{id}', 'DestroyController')->name('post.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::get('/admin', 'AdminController')->name('admin.index');

    Route::group(['namespace' => 'Post', 'prefix' => 'admin'], function () {
        Route::get('/post', 'IndexController')->name('admin.post.index');
    });
});

//ClientController
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/{client}', [ClientController::class, 'show'])->name('client.show');
Route::post('/client', [ClientController::class, 'store'])->name('client.store');
Route::get('/client/{client}/edit', [ClientController::class, 'edit'])->name('client.edit');
Route::patch('/client/{client}', [ClientController::class, 'update'])->name('client.update');
Route::delete('/client/{client}', [ClientController::class, 'destroy'])->name('client.delete');

//AUTH
Route::get('/registration', [RegistrationController::class, 'index'])->name('registration.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
//
//
//Route::post('/login/post', [LoginController::class, 'store'])->name('login.store');

//
//Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
//Route::get('/blog/{posts}', [BlogController::class, 'show'])->name('blog.show');
//
//
//
//Route::get('/first', [FirstController::class, 'index'])->name('first.index');
//Route::get('/main', [MainController::class, 'index'])->name('main.index');




//
//Route::get('/date', [DateController::class, 'index'])->name('date.index');
//Route::get('/article', [ArticleController::class, 'index'])->name('article.index');

//Route::get('/posts/create', [PostController::class, 'create']);
//Route::get('/posts/update', [PostController::class, 'update']);
//Route::get('/posts/delete', [PostController::class, 'delete']);
//Route::get('/posts/first', [PostController::class, 'firstOrCreate']);
//Route::get('/posts/restore/{id}', [PostController::class, 'restore']);


//Route::get('/author', [AuthorController::class, 'create']);




