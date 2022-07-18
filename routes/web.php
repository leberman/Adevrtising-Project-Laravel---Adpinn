<?php

declare(strict_types=1);

Route::get('/', 'PagesController@index')->name('home');

Auth::routes();
