<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function (\App\Models\Projects $projects) {
    $projects = \App\Models\Projects::all();
    $blog = \App\Models\Blog::all();
    return view('welcome',compact('projects', 'blog'));
});

Auth::routes();


Route::get('blog/all', [BlogController::class, 'index'])->name('blog.all');
Route::get('blog/detail/{blog}', [BlogController::class, 'show'])->name('blog.detail');


Route::post('comment/store', [CommentController::class, 'store'])->name('comment.store');


// projects
Route::get('project/all', [ProjectController::class, 'index'])->name('project.all');
Route::get('project/detail/{project}', [ProjectController::class, 'show'])->name('project.detail');

//services
Route::get('services/all', [ServiceController::class, 'index'])->name('services.all');


//product
Route::get('product/all', [ProductController::class, 'index'])->name('product.all');
Route::get('product/{blog}', [ProductController::class, 'show'])->name('product.detail');


// about
Route::get('درباره-ما', function (){
    return view('about');
})->name('about');

//cat
Route::get('category/{category}', [CategoryController::class, 'show']);
