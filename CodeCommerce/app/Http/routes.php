<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=> 'admin', 'where' => ['id' => '[0-9]+']], function () {

    Route::get('categories/{id}', ['as'=> 'categories', 'uses'=> 'AdminCategoriesController@index']);

    Route::get('products/{id}', ['as'=> 'products', 'uses'=> 'AdminProductsController@index']);
});

route::get('categories', 'CategoriesController@index');
route::get('categories/create', 'CategoriesController@create');
route::get('categories/edit', 'CategoriesController@edit');
route::get('categories/update', 'CategoriesController@update');
route::get('categories/destroy', 'CategoriesController@destroy');

route::get('products', 'ProductsController@index');
route::get('products/create', 'ProductsController@create');
route::get('products/edit', 'ProductsController@edit');
route::get('products/update', 'ProductsController@update');
route::get('products/destroy', 'ProductsController@destroy');