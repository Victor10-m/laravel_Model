<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', 'PagesController@inicio');
Route::get('/', 'PagesController@Inicio')->name('inicio');

Route::get('/detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::post('/','PagesController@crear')->name('notas.crear');

Route::get('/editar/{id}', 'PagesController@editar')->name('notas.editar');

Route::put('/editar/{id}', 'PagesController@update')->name('notas.update');

Route::get('fotos', 'PagesController@fotos')->name('foto');

Route::get('noticias', 'PagesController@noticias')->name('noticias');

Route::get('nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');
