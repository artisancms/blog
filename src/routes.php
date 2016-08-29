<?php


Route::get('blog/', 'ArtisanCMS\Blog\Http\Controller\BlogController@index');

Route::get('blog/{slug?}', 'ArtisanCMS\Blog\Http\Controllers\BlogController@show');
