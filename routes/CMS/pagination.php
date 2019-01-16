<?php
Route::group([
  
    'namespace'  => 'CMS',
], function () {
 Route::get('pagination/index' , 'PaginationController@index')->name('pagination.index');
 Route::get('pagination/create' , 'PaginationController@create')->name('pagination.create');
 Route::post('pagination/store' , 'PaginationController@store')->name('pagination.store');
Route::get('pagination/{id}/edit','PaginationController@edit')->name('pagination.edit');
Route::patch('pagination/{id}','PaginationController@update')->name('pagination.update');


});