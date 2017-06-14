<?php

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

    Route::get('/', function () {
        return view('blog.index');
    });

    /*Route::get('login', function (){
        return 'Here to login';
    });*/


    Auth::routes();

    Route::middleware('authorize')->group(function() {

        Route::get('/post','PostController@index');

        Route::get('/blog/show  ',function(){
            return view('blog.show');
        });
    });

