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
/*
 * HOME ROUTE
 */
Route::get('/', 'ProductController@home')->name('home');
Route::get('/addcart', 'ProductController@addCart')->name('addCart');
Route::get('/cart', 'ProductController@cart')->name('Cart');
Route::get('/buy', 'ProductController@buy')->name('Buy');
Route::get('/submit', function (){
    return view('submit');
})->name('submit');
/*Route::resource('product', 'ProductController');*/

