<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/catalog', 'CatalogController@index')->name('catalog.index');
Route::get('/catalog/create', 'CatalogController@create')->name('catalog.create');
Route::get('/catalog/1', 'CatalogController@show')->name('catalog.show');
Route::get('/catalog/basket', 'CatalogController@basket')->name('catalog.basket');

Auth::routes();
