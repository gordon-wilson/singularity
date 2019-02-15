<?php

Route::get('/', 'Domains\Misc\Root\Controllers\RootController@index');
Route::get('/getTodos', 'Domains\Misc\Root\Controllers\RootController@test');