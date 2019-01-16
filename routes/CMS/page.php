<?php
Route::group([
  
    'namespace'  => 'CMS',
], function () {
 Route::get('page' , 'PageController@index')->name('page.index');
 Route::get('page/create' , 'PageController@create')->name('page.create');
 Route::post('page/store' , 'PageController@store')->name('page.store');
Route::get('page/{id}/edit','PageController@edit')->name('page.edit');
Route::patch('page/{id}','PageController@update')->name('page.update');
Route::get('page/{id}','PageController@show')->name('page.show');

});