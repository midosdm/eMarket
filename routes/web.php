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

Route::get('/', function () {
    return view('welcome');
});

/* Routes des produits*/
Route::get('/boutique', 'ProductController@index')->name('products.index');
Route::get('/boutique/{slug}', 'ProductController@show')->name('products.show');

/* Route du panier */

Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
/*Route vers le panier */

Route::get('/panier','CartController@index')->name('cart.index');

/* Route vider le panier */
Route::get('/videpanier',function() 
    { 
        Cart::destroy();
    }
);

/* Route suprimer item du panier */
Route::delete('/panier/{rowId}', 'CartController@destroy')->name('cart.destroy');

/* route de paiement */
Route::get('/paiement', 'CheckoutController@index')->name('checkout.index');

/* route vers la method store de checkout */
Route::post('/paiement', 'checkoutController@store')->name('checkout.store');

Route::get('/merci', 'CheckoutController@thankYou')->name('checkout.thankYou');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
