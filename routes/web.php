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
Route::get('/form', '\App\Http\Controllers\MainController@submit_form_get')->name('submit.form.get');

Route::get('/news/{url}', '\App\Http\Controllers\BlogController@index')->name('blog.show');

Route::get('/lab', '\App\Http\Controllers\MainController@lab')->name('lab.show');
Route::get('/1_ИМ_Артиколи_форма_для_заполнения', '\App\Http\Controllers\MainController@price')->name('price.download');

Route::group(['middleware' => ['auth','admin'], 'prefix'=>'/admin'], function () {

    Route::get('/', '\App\Http\Controllers\Admin\MainController@index')->name('admin.index');
    Route::patch('/', '\App\Http\Controllers\Admin\MainController@update')->name('admin.update');
    Route::post('/file', '\App\Http\Controllers\Admin\MainController@file')->name('admin.file');


    Route::get('/post', '\App\Http\Controllers\Admin\PostController@index')->name('admin.post.index');
    Route::get('/post/create', '\App\Http\Controllers\Admin\PostController@create')->name('admin.post.create');
    Route::post('/pst/', '\App\Http\Controllers\Admin\PostController@store')->name('admin.post.store');
    Route::delete('/post/{blog_post}', '\App\Http\Controllers\Admin\PostController@delete')->name('admin.post.delete');
    Route::get('/post/edit/{blog_post}', '\App\Http\Controllers\Admin\PostController@edit')->name('admin.post.edit');
    Route::patch('/post/update/{blog_post}', '\App\Http\Controllers\Admin\PostController@update')->name('admin.post.update');

    Route::get('/profile', '\App\Http\Controllers\Admin\ProfileController@index')->name('admin.profile.index');
    Route::patch('/profile', '\App\Http\Controllers\Admin\ProfileController@update')->name('admin.profile.update');

    Route::get('/logout','\App\Http\Controllers\Admin\MainController@logout')->name('admin.logout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/yandex_25603fdf3f536e81.html', function (){return 'Verification: 25603fdf3f536e81';})->name('home');
