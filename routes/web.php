<?php

Route::get('/', 'ListsController@index');
Route::resource('lists', 'ListsController');
