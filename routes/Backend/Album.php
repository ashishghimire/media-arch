<?php

    /**
     * All route names are prefixed with 'admin.'.
     */

    Route::get('album_type/{type}' , 'AlbumController@index')->name('album.type');
    Route::get('album/create' , 'AlbumController@create')->name('album.create');
    Route::post('album/store' , 'AlbumController@store')->name('album.store');
    Route::get('album/{id}/{type}/edit' , 'AlbumController@edit')->name('album.edit');
    Route::patch('album/update/{id}' , 'AlbumController@update')->name('album.update');
    Route::get('album/{id}' , 'AlbumController@show')->name('album.show');
    Route::delete('album/{id}' , 'AlbumController@delete')->name('album.delete');
   
