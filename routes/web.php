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

/*Route::get('/', function () {
    return view('blog.index');
});

Route::get('/post', function(){
    return view('blog.show  ');
});

Route::get('/test', function(){
    return view('blog.layouts.main');
});*/

Auth::routes();

Route::middleware('authorize')->group(function() {

    Route::get('/post','PostController@index');
		
});

/*Route::group([

		'prefix' => Config("authorization.route-prefix"),
		'middleware' => ['web', 'auth']],

		function(){
			Route::group(['middleware' => Config("authorization.middleware")], function() {
				Route::resource('users', 'UsersController', ['except' =>[
						'create', 'store', 'show'
					]]);
				Route::resource('roles', 'RolesController');
				Route::get('/permissions','PermissionController@index');
				Route::post('/permissions','PermissionCOntroller@update');
				Route::post('/permissions/getSelectedRoutes', 'PermissionsController@getSelectedRoutes');
			});

			Route::get('/',function(){
				return view('vendor.authorize.welcome');
			});			
		});*/





/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
