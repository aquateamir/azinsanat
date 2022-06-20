<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
$url ='/panel/admin-soorinaz';
Route::controller(AdminController::class)
    ->name('panel.')
    ->middleware('isadmin')
    ->prefix($url)
    ->group(function () {
        //        admin
        Route::get('/', 'index')->name('index');
//        Route::get('gallery/all', 'all_gallery')->name('all_gallery');


    });

Route::controller(BlogController::class)
    ->name('panel.')
    ->middleware('isadmin')
    ->prefix($url)
    ->group(function () {
        //        blog
        Route::get('blog/add', 'index')->name('blog');
        Route::get('blog/all', 'show')->name('blog_all');
        Route::post('blog/store', 'store')->name('store_blog');
        Route::get('blog/remove/{id}', 'destroy')->name('destroy_blog');
        Route::get('blog/edit/{id}', 'edit')->name('edit_blog');
        Route::patch('blog/update/{id}', 'update')->name('update_blog');

    });


Route::controller(ProductController::class)
    ->name('panel.')
    ->middleware('isadmin')
    ->prefix($url)
    ->group(function () {
        //        product
        Route::get('product/add', 'create')->name('product');
        Route::get('product/all', 'show')->name('product_all');
        Route::post('product/store', 'store')->name('store_product');
        Route::get('product/remove/{id}', 'destroy')->name('destroy_product');
        Route::get('product/edit/{id}', 'edit')->name('edit_product');
        Route::patch('product/update/{id}', 'update')->name('update_product');

    });

Route::controller(CategoryController::class)
    ->name('panel.')
    ->middleware('isadmin')
    ->prefix($url)
    ->group(function () {
        //        product
        Route::get('cat/add', 'index')->name('cat');
        Route::get('cat/all', 'show')->name('cat_all');
        Route::post('cat/store', 'store')->name('store_cat');
        Route::get('cat/remove/{id}', 'destroy')->name('destroy_cat');
        Route::get('cat/edit/{id}', 'edit')->name('edit_cat');
    });
Route::controller(\App\Http\Controllers\Admin\ProjectsController::class)
    ->name('panel.')
    ->middleware('isadmin')
    ->prefix($url)
    ->group(function () {
        //        product
        Route::get('project/add', 'create')->name('project');
        Route::get('project/all', 'index')->name('project_all');
        Route::post('project/store', 'store')->name('store_project');
        Route::get('project/remove/{id}', 'destroy')->name('destroy_project');
        Route::get('project/edit/{id}', 'edit')->name('edit_project');
        Route::patch('project/update/{id}', 'update')->name('update_project');

    });






















//
//Route::controller(GalleryController::class)
//    ->name('panel.')
//    ->middleware('isadmin')
//    ->prefix($url)
//    ->group(function () {
//        //        gallery
//        Route::get('gallery/add', 'create')->name('gallery');
//        Route::post('gallery/store', 'store')->name('store_gallery');
//        Route::get('gallery/remove/{id}', 'destroy')->name('destroy_gallery');
//    });
//Route::controller(commentsController::class)
//    ->name('panel.')
//    ->middleware('isadmin')
//    ->prefix($url)
//    ->group(function () {
//        //        gallery
//
//        Route::get('comments/all', 'index')->name('comments');
//        Route::get('show/comment/{id}', 'show')->name('replay_comment');
//        Route::post('replay/comment/store/{id}', 'update')->name('store_comment');
//        Route::get('destroy/comment/{id}', 'destroy')->name('destroy_comment');
//    });
