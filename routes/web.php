<?php

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


Route::get('/', 'AdegaController@home');

Route::get('/about', 'AdegaController@about');

Route::get('/login', 'UsuariosController@loginView')->name('login');

Route::post('/login', 'UsuariosController@login');

Route::get('/logout', 'UsuariosController@logout');

Route::get('/product', 'AdegaController@product');

Route::get('/products', 'AdegaController@products');

Route::get('/register', 'UsuariosController@registerView');

Route::post('/register', 'UsuariosController@store');

Route::get('/shoppingCart', 'AdegaController@shoppingCart');

Route::get('/panel', 'AdegaController@panel');

Route::get('/orders', 'AdegaController@orders');

Route::get('/address', 'AdegaController@address');

Route::get('/address_edit', 'AdegaController@address_edit');

Route::get('/account_edit', 'AdegaController@account_edit');


Route::post('/newsletter', 'NewsletterController@registerNewsletter');

Route::get('/wines', 'ProductController@wineList');



