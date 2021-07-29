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

Route::get('/footer', function () {
    return view('footer');
})->middleware('auth');
Route::get('/', function () {
    return view('footer');
})->middleware('auth');

// Route::get('/About', function () {
//     return view('About');
// });
// Route::get('/Contact', function () {
//     return view('Contactb');
// });
// Route::get('/new', 'hello@Model');
Route::get('/permission','permissionController@index');
Route::get('/permission/create','permissionController@create');
Route::post('/permission/store','permissionController@store');
Route::get('/permission/edit/{id}',['uses'=>'permissionController@edit','as' => 'permission-edit']);
Route::put('/permission/edit/{id}',['uses'=>'permissionController@update','as' => 'permission-update']);
Route::delete('/permission/delete/{id}',['uses'=>'permissionController@destroy','as' => 'permission-delete']);


Route::get('/roles','RoleController@index');
Route::get('/roles/create','RoleController@create');
Route::post('/roles/store','RoleController@store');
Route::get('/roles/edit/{id}',['uses'=>'RoleController@edit','as' => 'role-edit']);
Route::put('/roles/edit/{id}',['uses'=>'RoleController@update','as' => 'role-update']);
Route::delete('/roles/delete/{id}',['uses'=>'RoleController@destroy','as' => 'role-delete']);

Route::get('/Author','AuthorController@index');
Route::get('/Author/create','AuthorController@create');
Route::post('/Author/store','AuthorController@store');
Route::get('/Author/edit/{id}',['uses'=>'AuthorController@edit','as' => 'Author-edit']);
Route::put('/Author/edit/{id}',['uses'=>'AuthorController@update','as' => 'Author-update']);
Route::delete('/Author/delete/{id}',['uses'=>'AuthorController@destroy','as' => 'Author-delete']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
