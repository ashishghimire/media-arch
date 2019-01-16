<?php
    /**
     * Created by PhpStorm.
     * User: sabin
     * Date: 5/17/17
     * Time: 7:27 PM
     */
    Route::get('file' , 'FileController@index')->name('file');
    Route::get('album/{album_id}/file/create' , 'FileController@create')->name('album.file.create');
    Route::get('album/{album_id}/file/slideshow' , 'FileController@slideshow')->name('album.file.slideshow');
    Route::post('file/store' , 'FileController@store')->name('file.store');
    Route::get('file/{id}/edit' , 'FileController@edit')->name('file.edit');
    Route::patch('file/update/{id}' , 'FileController@update')->name('file.update');
    Route::get('file_by_album/{id}' , 'FileController@fileByAlbum')->name('file.show');
    Route::get('editFileByAlbum/{id}/{type}' , 'FileController@editFileByAlbum')->name('file.editFileByAlbum');
    Route::delete('file/delete/{id}' , 'FileController@delete')->name('file.delete');

