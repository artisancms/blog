<?php

Route::get('blog/', 'ArtisanCMS\Blog\Http\Controllers\BlogController@index');
Route::get('blog/{slug?}', 'ArtisanCMS\Blog\Http\Controllers\BlogController@show');

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('admin/blog/create', 'ArtisanCMS\Blog\Http\Controllers\BlogAdminController@create');
    Route::post('admin/blog/create', 'ArtisanCMS\Blog\Http\Controllers\BlogAdminController@store');
    Route::get('admin/blog/', 'ArtisanCMS\Blog\Http\Controllers\BlogAdminController@index');
    Route::get('admin/blog/{id}', 'ArtisanCMS\Blog\Http\Controllers\BlogAdminController@edit');
    Route::post('admin/blog/{id}', 'ArtisanCMS\Blog\Http\Controllers\BlogAdminController@update');
});
