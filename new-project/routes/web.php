<?php

use App\Http\Controllers\Blogs\CategoryController;
use App\Http\Controllers\Blogs\ItemController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Users\RegisteredUser;
use App\Http\Controllers\Users\SessionController;
use Illuminate\Support\Facades\Route;

Route::group(['namespaces'=>'Pages'],function(){
    Route::get('/', [PagesController::class,'home']);
    Route::get('/about', [PagesController::class,'about']);
    Route::get('/contact', [PagesController::class,'contact']);
});

Route::resource('items', ItemController::class);

Route::group(['namespace'=>'Blogs'],function(){
    Route::get('categories', [CategoryController::class,'index'])->name('category.index');
    Route::get('categories/{slug}', [CategoryController::class,'show'])->name('category.show');
    Route::get('category/create', [CategoryController::class,'create'])->name('category.create');
    Route::Post('categories', [CategoryController::class,'store'])->name('category.store');
    Route::Delete('categories/{category}', [CategoryController::class,'destroy'])->name('category.destroy');
    Route::get('categories/{id}/edit', [CategoryController::class,'edit'])->name('category.edit');
    Route::put('categories/{id}', [CategoryController::class, 'update'])->name('category.update');
});

Route::group(['namespace'=>'Users'],function(){
    Route::get('register', [RegisteredUser::class,'create'])->name('register');
    Route::post('register', [RegisteredUser::class,'store'])->name('register.store');
});

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store'])->name('login.store');
Route::post('/logout',[SessionController::class,'destroy'])->name('logout.destroy');

Route::get("/dbconn",function(){
    return view("dbconn");
});




