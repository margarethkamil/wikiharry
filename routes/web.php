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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/personaje/{nombre?}', 'PagesController@personajes')->name('route.personajes');

Route::get('/casas/{nombre?}', 'PagesController@casas')->name('route.casas');

Route::get('/bestiario', 'PagesController@bestiario')->name('route.bestiario');

Route::get('/hechizos', 'PagesController@hechizos')->name('route.hechizos');

Route::get('/autor', 'PagesController@autor')->name('route.autor');

Route::get('/comunidad', 'PagesController@comunidad')->name('route.comunidad');








