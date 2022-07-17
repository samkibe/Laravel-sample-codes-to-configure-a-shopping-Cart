<?php

use App\Http\Controllers\Productcontroller;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'userController@index')->name('user');

Route::get('/add/{id}', 'usercontroller@add');

Route::get('/shoppingCart', 'usercontroller@Cart')->name('shoppingCart');
Route::delete('/delete/{id}','userController@delete');
Route::get('/view', 'userController@view')->name('shoppingCart');


Route::get('/admin', 'adminController@view')->name('admin');
Route::get('/edit/{id}','adminController@edit');
Route::Put('/edit-update/{id}','adminController@editupdate');
Route::delete('/delete/{id}','adminController@delete');

Route::get('/product','Productcontroller@index')->name('product');
Route::post('/addprod','Productcontroller@store')->name('addprod');
Route::get('/displayprod','Productcontroller@display')->name('displayprod');

Route::get('/editimage/{id}','Productcontroller@edit');
Route::Put('/updateimage/{id}','Productcontroller@update');




Route::resource('/student','StudentController');

//Route::resource('/user','adminController');


Route::get('storage/{filename}', function ($filename)
{
    return Image::make(storage_path('public/' . $filename))->response();
});


Auth::routes();


