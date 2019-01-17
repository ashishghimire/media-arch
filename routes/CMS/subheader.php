<?php
Route::group([
  
    'namespace'  => 'CMS',
], function () {
 Route::get('subheader/index' , 'SubHeaderController@index')->name('subheader.index');
 Route::get('subheader/create' , 'SubHeaderController@create')->name('subheader.create');
 Route::post('subheader/store' , 'SubHeaderController@store')->name('subheader.store');
Route::get('subheader/{id}/edit','SubHeaderController@edit')->name('subheader.edit');
Route::patch('subheader/{id}','SubHeaderController@update')->name('subheader.update');

});