<?php

use App\Http\Controllers\Blogs\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Blogs\BlogsController;
use App\Http\Controllers\Pages\PagesController;
use Illuminate\Support\Facades\Route;


Route::group(['namespaces'=>'Pages'],function(){
    Route::get('/', [PagesController::class,'home']);
    Route::get('/about', [PagesController::class,'about']);
    Route::get('/contact', [PagesController::class,'contact']);
});

Route::resource('items', ItemController::class);

Route::get('categories', [CategoryController::class,'index'])->name('category.index');
Route::get('categories/{slug}', [CategoryController::class,'show'])->name('category.show');
Route::get('category/create', [CategoryController::class,'create'])->name('category.create');
Route::Post('categories', [CategoryController::class,'store'])->name('category.store');
Route::Delete('categories/{category}', [CategoryController::class,'destroy'])->name('category.destroy');
Route::get('categories/{id}/edit', [CategoryController::class,'edit'])->name('category.edit');
Route::put('categories/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::get("/dbconn",function(){
    return view("dbconn");
});




