<?php
Route::group([
  
    'namespace'  => 'CMS',
], function () {
 Route::get('header/index' , 'HeaderController@index')->name('header.index');
 Route::get('header/create' , 'HeaderController@create')->name('header.create');
 Route::post('header/store' , 'HeaderController@store')->name('header.store');
Route::get('header/{id}/edit','HeaderController@edit')->name('header.edit');
Route::patch('header/{id}','HeaderController@update')->name('header.update');


});