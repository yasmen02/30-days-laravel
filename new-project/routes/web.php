<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Blogs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Blog;
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
Route::group(['namespaces'=>'Pages'],function(){
    Route::get('/', [PagesController::class,'home']);
    Route::get('/about', [PagesController::class,'about']);
    Route::get('/contact', [PagesController::class,'contact']);
});
Route::group(['namespaces'=>'Blogs'],function(){
    Route::get('/blogs', [BlogsController::class,'getBlogs']);
    Route::get('/blogs/{id}', [BlogsController::class,'showBlogs']);
})
;
Route::get("/dbconn",function(){
    return view("dbconn");
});
Route::resource('news', Blogs::class);
//Route::get('blogs','BlogsController@index');
//Route::get('blogs/{id}','BlogsController@show');
//Route::get('blogs/create','BlogsController@create');
//Route::post('blogs','BlogsController@store');
//Route::get('blogs/{id}/edit','BlogsController@edit');
//Route::patch('blogs/{id}','BlogsController@update');
//Route::delete('blogs/{id}','BlogsController@destroy');


