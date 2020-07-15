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

Route::get('/register', 'UsuariosController@registerView');

Route::post('/register', 'UsuariosController@store');

Route::get('/favourites', 'ProductController@favouritesView')->middleware('auth');

// ROTAS DO PAINEL DO USUÁRIO - ! início !
Route::get('/panel', 'PanelController@panel')->middleware('auth');
Route::get('/panel/orders', 'PanelController@orders')->middleware('auth');
Route::get('/panel/address', 'PanelController@addressShow')->middleware('auth');
Route::get('/panel/address/edit', 'PanelController@addressEdit')->middleware('auth');
Route::post('/panel/address/edit', 'PanelController@addressEdit')->middleware('auth');
Route::get('/panel/account/edit', 'PanelController@account_edit')->middleware('auth');
Route::post('/panel/account/edit', 'PanelController@account_edit')->middleware('auth')->name('account');
// ROTAS DO PAINEL DO USUÁRIO - ! fim !


Route::get('/shoppingCart', 'AdegaController@shoppingCart');

Route::post('/newsletter', 'NewsletterController@registerNewsletter');

Route::get('/product/{id}', 'ProductController@showProduct');

Route::get('/products/wines', 'ProductController@wineList');

Route::get('/products/promotions', 'ProductController@promotionsList');


Route::get('/products/beers', 'ProductController@beersList');



Route::get('/products/kits', 'ProductController@kitsList');

Route::get('/products/distilleds', 'ProductController@distilledsList');

Route::get('/products/nonAlcoholics', 'ProductController@nonAlcoholicsList');

Route::post('/newsletter', 'NewsletterController@registerNewsletter');





