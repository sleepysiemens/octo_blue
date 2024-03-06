<?php

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

//Route::get('/', function () {return view('welcome');});


Route::get('/', '\App\Http\Controllers\MainController@index')->name('main.index');
Route::post('/', '\App\Http\Controllers\MainController@submit_form')->name('submit.form');

Route::get('/news/{url}', '\App\Http\Controllers\BlogController@index')->name('blog.show');

Route::group(['middleware' => ['auth','admin'], 'prefix'=>'/admin'], function () {
    Route::get('/', '\App\Http\Controllers\AdminController@index')->name('admin.index');
    Route::get('/create', '\App\Http\Controllers\AdminController@create')->name('admin.create');
    Route::post('/', '\App\Http\Controllers\AdminController@store')->name('admin.store');
    Route::delete('/{blog_post}', '\App\Http\Controllers\AdminController@delete')->name('admin.delete');
    Route::get('/edit/{blog_post}', '\App\Http\Controllers\AdminController@edit')->name('admin.edit');
    Route::patch('/update/{blog_post}', '\App\Http\Controllers\AdminController@update')->name('admin.update');

    Route::get('/logout','\App\Http\Controllers\AdminController@logout')->name('admin.logout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/yandex_25603fdf3f536e81.html', function (){return 'Verification: 25603fdf3f536e81';})->name('home');
