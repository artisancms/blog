<?php

Route::get('blog/', 'ArtisanCMS\Blog\Http\Controllers\BlogController@index');
Route::get('blog/{slug?}', 'ArtisanCMS\Blog\Http\Controllers\BlogController@show');

Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/blog/', 'ArtisanCMS\Blog\Http\Controllers\BlogAdminController@index');
    Route::get('admin/blog/{id}', 'ArtisanCMS\Blog\Http\Controllers\BlogAdminController@edit');
});
